<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;

class GarbageCollectorController extends Controller
{
    public function index()
    {
        $pendingOperations = Operation::where('status', 'Pending')->get();
        return view('staff', compact('pendingOperations'));
    }
    public function updateStatus(Request $request, $id)
    {
        $operation = Operation::find($id);

        if ($operation) {
            $operation->Status = $request->input('status');
            $operation->save();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => 'Operation not found'], 404);
        }
        
    }
    
}


