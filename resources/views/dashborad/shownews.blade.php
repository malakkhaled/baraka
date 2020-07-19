@extends('layouts.app')

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-warning">
                  <h4 class="card-title ">عرض المنتجات</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-warning" style="white-space: nowrap;">
                      <th>
                        عنوان الخبر
                        </th>
                        <th>
                        الخبر
                        </th>
                        <th>
                         الناشر
                        </th>
                        <th>
                         تاريخ النشر
                        </th>
                   
                        <th>
                       الإعدادات
                        </th>
                      
                      </thead>
                      <tbody  >
                <tr>
                <td style="white-space: nowrap;">
                العديد من النصوص الأخرى إضاف
                          </td>
                          <td >
                          
                          ذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافةذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة
                          </td>
                       
                          <td style="white-space: nowrap;">
                          محمد خالد
                          </td>
                          <th>
                      2020/2/22
                        </th>
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