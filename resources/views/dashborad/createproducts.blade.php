@extends('layouts.app')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">إضافة منتج جديد</h4>
              
                </div>
                <div class="card-body">
           <form method="post" action="">
            @csrf

                    <div class="row">
                  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">إسم المنتج</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        
                        <div class="form-group">
                        <label class="bmd-label-floating">تصنيف المنتج</label>
                          <input type="text" class="form-control">
                         
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                      
                        <div class="form-group">
                          <label class="bmd-label-floating">صورة المنتج </label>
                          <input type="file" class="form-control">
                        </div>
                    
                      </div>
                    </div> 
                    <div class="row">
                 
                      
                      <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">شرح عن المنتج</label>
                          <textarea
            class="form-control"
            rows="9"
            name="personeDes"
            required
            id="personeDes" type="text"
         
          ></textarea>
                        </div>
                      </div>
                    </div>
                
               
                        <!--
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    -->
                    <button type="submit" class="btn btn-warning pull-right" style='font-size:14px'>إضافة منتج</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>



@endsection