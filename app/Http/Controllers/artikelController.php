<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class artikelController extends Controller
{
    public $url = "storage/data.json";

    public function index()
    {
        $dataJson = file_get_contents($this->url);
        $data = json_decode($dataJson);
        return view('artikel', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikelbaru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataJson = file_get_contents($this->url);
        $data = json_decode($dataJson);

        //var_dump($data);exit;

        $new = (object)[
            'judul' => $request->judul,
            'slug' => Str::slug($request->judul),
            'penulis' => $request->penulis,
            'content' => $request->content,
            'datetime' => date('Y-m-d H:i:s'),
        ];
        array_push($data, $new);
        file_put_contents($this->url, json_encode($data));
        return redirect(route('artikel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        {
            $dataJson = file_get_contents($this->url);
            $datas = json_decode($dataJson);
            $data = [];
            foreach ($datas as $d) {
                if ($d->slug == $id) {
                    $data = $d;
                    break;
                }
            }
            return view('show', compact('data'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        {
            $dataJson = file_get_contents($this->url);
            $datas = json_decode($dataJson);
            $data = [];
            foreach ($datas as $d) {
                if ($d->slug == $id) {
                    $data = $d;
                    break;
                }
            }
            return view('edit', compact('data'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dataJson = file_get_contents($this->url);
        $data = json_decode($dataJson);
        for ($i = 0; $i < count($data); $i++) {
            if ($data[$i]->slug == $id) {
                $data[$i]->judul = $request->judul;
                $data[$i]->penulis = $request->penulis;
                $data[$i]->content = $request->content;

                $data[$i]->datetime = date('Y-m-d H:i:s');

                array_replace($data);
                break;
            }
        }
        file_put_contents($this->url, json_encode($data));
        return redirect(route('artikel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataJson = file_get_contents($this->url);
        $data = json_decode($dataJson);
        $new = [];
        foreach ($data as $d) {
            if ($d->slug == $id) {
                continue;
            }
            array_push($new, $d);
        }
        file_put_contents($this->url, json_encode($new));
        return redirect(route('artikel.index'));
    }
}
