<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    // Display a listing of surveys
    public function index()
    {
        $surveys = Survey::all();
        return view('pertanyaan.pertanyaan_test', compact('surveys'));
    }

    public function showSurveyView($id)
    {
        $survey = Survey::find($id);

        if (!$survey) {
            return redirect()->route('pertanyaan_test')->with('error', 'Survey not found');
        }

        return view('surveyView', ['surveyJson' => $survey->json]);
    }

    public function editSurvey($id)
    {
        $survey = Survey::find($id);
        return view('surveyEdit', ['surveyId' => $id, 'survey' => $survey]);
    }

    // Delete the specified survey
    public function destroy($id)
    {
        $survey = Survey::find($id);

        if ($survey) {
            $survey->delete();
            return response()->json(['success' => 'Survey deleted successfully']);
        } else {
            return response()->json(['error' => 'Survey not found'], 404);
        }
    }
}
