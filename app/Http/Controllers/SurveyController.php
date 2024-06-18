<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use App\Models\VideoKepribadian;
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

    public function getSurvey($id)
    {
        $survey = Survey::find($id);
        return response()->json(['json' => $survey->json]);
    }

    public function saveSurvey(Request $request, $id)
    {
        $survey = Survey::find($id);
        $survey->json = $request->input('json');
        $survey->save();

        return response()->json(['success' => true]);
    }


    public function showPersonality($personality)
    {
        // Fetch videos based on personality type
        $videos = VideoKepribadian::where('kepribadian', $personality)->get();
        
        // Determine the view name dynamically
        $viewName = 'interview-list.' . strtolower($personality);
        
        // Pass videos data to the view
        return view($viewName, compact('videos'));
    }
    
}
