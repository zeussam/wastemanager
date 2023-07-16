<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Operation;
use Session;

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
            $operation->status = $request->input('status');
            $operation->save();
            
            // Flash success message
            Session::flash('success', 'Operation status updated successfully.');
            
            return redirect()->back();
        } else {
            return response()->json(['error' => 'Operation not found'], 404);
        }
    }
}

    



