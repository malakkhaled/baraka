@extends('layouts.app')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">عرض المدونين</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-warning" style="white-space: nowrap;">
                      <th>
                      الإسم التلاثي
                        </th>
                        <th>
                        البريد الإلكتروني
                        </th>
                        <th>
                        كلمة المرور
                        </th>
                       
                   
                        <th>
                       الإعدادات
                        </th>
                      
                      </thead>
                      <tbody  >
                <tr>
                <td style="white-space: nowrap;">
                محمد خالد
                          </td>
                          <td >
                          
                     malak@gmail.com
                          </td>
                       
                          <td style="white-space: nowrap;">
                         *********************
                          </td>
                       
                          <td class="text-warning" style="white-space: nowrap;">
                       
                          <button type="button" rel="tooltip" title="تعديل" class="btn btn-warning btn-link btn-sm p-0">

                                <a href="">                                <i class="material-icons">edit</i></a>
                              </button>
                          <form action=""  method="post" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="button" rel="tooltip" title="حذف" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                </form>
                          
                          </td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
         
          </div>
        </div>
      </div>

@endsection