@extends('layouts.app')

@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title">تعديل الصفحة الشخصية</h4>
              
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">الإسم التلاثي</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">البريد الإلكتروني</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <h4 class="bmd-label-floating" style="    margin: 20px 0 7px 0;">لتغيير كلمة المرور</h4>   
                    <div class="row">
                 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">كلمة المرور الحالية </label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">كلمة المرور الجديدة</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <!--
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
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
                    <button type="submit" class="btn btn-warning pull-right" style='font-size:14px'>حفظ التعديلات</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>



@endsection