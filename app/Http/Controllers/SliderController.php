<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function getSliders()
    {
        $data = Slider::all();
        $datas = $data->toArray();

        $datas = Arr::map($datas, function ($data) {
            return Arr::add($data, 'action', '<a href="' . route('sliders.edit', $data['id']) . '" class="btn btn-primary">Edit</a><button data-url="' . route('sliders.destroy', $data['id']) . '" data-id="' . $data['id'] . '" class="btn btn-danger delete-slider">Delete</button>');
        });

        return response()->json([
            'data' => $datas
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return view('admin.pages.sliders');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $image = $request->file('image');

            $rules = [
                'name' => 'required',
                'desc' => '',
                'image' => ''
            ];
            $validation = Validator::make($request->all(), $rules);

            if ($validation->fails()) {

                return redirect()->back()->withErrors($validation);
            }

            $validated = $validation->validated();
            $validated['image'] = $image->getClientOriginalName();

            $dataInserted = Slider::insert($validated);

            if ($dataInserted) {
                $slider = DB::table('sliders')
                    ->orderBy('id', 'desc')
                    ->first();

                DB::table('sliders')
                    ->where('id', $slider->id)
                    ->update(['image' => $slider->id . '.' . $image->getClientOriginalExtension()]);

                $image->move('storage/admin-assets/slider-images', $slider->id . '.' . $image->getClientOriginalExtension());
            }

            return back();
        } catch (Exception $exception) {
            return $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::find($id);

        return view('admin.pages.editSlider')->with('slider', $slider);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);
        $slider->delete();

        return response()->json(['success' => 'Slider Deleted Successfully!']);
    }
}
