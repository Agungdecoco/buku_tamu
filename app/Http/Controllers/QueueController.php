<?php

namespace App\Http\Controllers;

use App\Models\Queue;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQueueRequest;
use App\Http\Requests\UpdateQueueRequest;
use App\Models\Consultant;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class QueueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultants = Consultant::all();
        // dd($consultants);
        $queues = Queue::latest()->paginate(5);
        return view('guest.home', compact('queues', 'consultants'));
        // ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $consultants = Consultant::all();
        // dd($consultants);
        $queues = Queue::latest()->paginate(5);
        return view('guest.reserve', compact('queues', 'consultants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQueueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Queue::create([
            'tgl_konsultasi' => $request->tgl_konsultasi,
            'consultants_nip' => $request->consultants_nip,
            'topik' => $request->topik,
            'tipe_konsultasi' => $request->tipe_konsultasi,
            'ruang' => $request->ruang,
            'anggota1' => $request->anggota1,
            'anggota2' => $request->anggota2,
            'anggota3' => $request->anggota3
        ]);

        return redirect()->route('home');
        // $request->validate([
        //     'tgl_konsultasi' => 'required',
        //     'consultants_nip' => 'required',
        //     'topik' => 'required',
        //     'tipe_konsultasi' => 'required',
        //     'ruang' => 'required',
        //     'anggota1' => 'required',
        //     'anggota2' => 'nullable',
        //     'anggota3' => 'nullable'
        // ]);

        // Queue::create($request->all());

        // return redirect()->route('home.index')->with('success', 'Reserve created succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function show(Queue $queue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function edit(Queue $queue)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQueueRequest  $request
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQueueRequest $request, Queue $queue)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Queue  $queue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        DB::table('queues')->where('id', $id)->delete();

        return redirect()->route('home')->with('success', 'Reserve deleted successfully');
    }
}
