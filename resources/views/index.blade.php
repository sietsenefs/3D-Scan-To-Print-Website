@extends('layouts.defaultlayout')
@section('content')

<div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="card text-center modelcard">
            <div class="card-header">
              Test 1
            </div>
            <div class="card-body">
              <h5 class="card-title">scene test</h5>
        
                    <model-viewer src="{{asset('models/testtest.gltf')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">
                    </model-viewer>
                    
              
            </div>
            <div class="card-footer text-muted">
              one week ago
            </div>
          </div>
      </div>


      <div class="col-md-4">

        <div class="card text-center modelcard">
            <div class="card-header">
              Test 2
            </div>
            <div class="card-body">
              <h5 class="card-title">Shiny test cube</h5>
        
                    <model-viewer src="{{asset('models/testcube2.gltf')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">
                    </model-viewer>
        
             
            </div>
            <div class="card-footer text-muted">
              one week ago
            </div>
          </div>

      </div>


      <div class="col-md-4">

        <div class="card text-center modelcard">
            <div class="card-header">
              Test 3
            </div>
            <div class="card-body">
              <h5 class="card-title">annotation test cube</h5>
        
                    <model-viewer id="loading-demo" src="{{asset('models/casewires.gltf')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">


                              


                    </model-viewer>
        
              
              <button class="btn btn-primary" onclick="addHotspot()">Add Hotspot</button>
              <button class="btn btn-primary" onclick="removeHotspot()">Remove Hotspot</button>
            </div>
            <div class="card-footer text-muted">
              one week ago
            </div>
          </div>

      </div>

    </div>




    {{-- sketchfab --}}

    <div class="row">

      <div class="col-md-4">
        <div class="card text-center modelcard">
            <div class="card-header">
              Test 4
            </div>
            <div class="card-body">
              <h5 class="card-title">same model as sketchfab test</h5>
        
                    <model-viewer src="{{asset('models/testcube1.gltf')}}" class="testcubes col-md-12"
                                auto-rotate 
                                camera-controls
                                background-color="#70BCD1"
                              alt="A 3D model of a test cube">
                    </model-viewer>
                    
              
            </div>
            <div class="card-footer text-muted">
              yesterday
            </div>
          </div>
      </div>


      <div class="col-md-4">

        <div class="card text-center modelcard">
            <div class="card-header">
              Test 5
            </div>
            <div class="card-body">
              <h5 class="card-title">Sketchfab test cube</h5>
        
              <div class="sketchfab-embed-wrapper">
                <iframe title="A 3D model" width="100%" height="100%" src="https://sketchfab.com/models/e0e10562a38f4e73bacbd3cdc187f6e7/embed?autospin=0.2&amp;autostart=1&amp;preload=1&amp;ui_controls=1&amp;ui_infos=1&amp;ui_inspector=1&amp;ui_stop=1&amp;ui_watermark=1&amp;ui_watermark_link=1" frameborder="0" allow="autoplay; fullscreen; vr" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div>
            
        
             
            </div>
            <div class="card-footer text-muted">
              today
            </div>
          </div>

      </div>


      <div class="col-md-4">

        <div class="card text-center modelcard">
            <div class="card-header">
              Test 6
            </div>
            <div class="card-body">
              <h5 class="card-title">Sketchfab premium test</h5>
        
              <iframe id="view360Iframe" width="100%" scrolling="0" src="https://sketchfab.com/models/8d913bda48f84217902e6829982c494f/embed?ui_infos=0&amp;ui_watermark=0&amp;ui_help=0&amp;ui_settings=0&amp;ui_inspector=0&amp;ui_annotations=0&amp;ui_stop=0&amp;ui_vr=0&amp;preload=1&amp;autostart=1&amp;ui_hint=2&amp;autospin=0.2">

              </iframe>
        
              
             
            </div>
            <div class="card-footer text-muted">
              today
            </div>
          </div>

      </div>

    </div>


    {{-- end sketchfab --}}


    <div class="row">
        <div class="col-md-12">
            <div class="card text-center modelcard">
                <div class="card-header">
                  Test 7
                </div>
                <div class="card-body">
                  <h5 class="card-title">Iphone case</h5>
            
                        <model-viewer src="{{asset('models/iphone-xr-case.gltf')}}" class="testcubes testcubebig col-md-12"
                                    auto-rotate 
                                    camera-controls
                                    background-color="#254441"
                                    shadow-intensity="1"
                                  alt="A 3D model of a test cube">
                        </model-viewer>
            
                 
                </div>
                <div class="card-footer text-muted">
                  2 hours ago
                </div>
              </div>

        </div>
        
      </div>

    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
      <div class="col-md-4"></div>
    </div>
    
  </div>



@endsection