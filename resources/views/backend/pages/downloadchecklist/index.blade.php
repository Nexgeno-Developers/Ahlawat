@extends('backend.layouts.app')

@section('page.name', 'Download Checklist')

@section('page.content')
<div class="card">
   <div class="card-body">
      <div class="row mb-2">
         <div class="col-sm-5">
            {{--<h3>List</h3>--}}
         </div>
         <div class="col-sm-7">
           <!--  <div class="text-sm-end">
                <a href="javascript:void(0);" class="btn btn-danger mb-2" onclick="largeModal('{{ url(route('practicearea.add')) }}', 'Add Download Checklist')"><i class="mdi mdi-plus-circle me-2"></i> Add Download Checklist</a>
            </div> -->
         </div>
         <!-- end col-->
      </div>
      <div class="table-responsive">
      <table id="basic-datatable" class="table dt-responsive nowrap w-100">
        <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Slug</th>
                <th>IP Address</th>
                <th>Status</th>
                <th>Date</th> 
            </tr>
        </thead>
        <tbody>
            @php $i = 1; @endphp
            @foreach($downloadchecklist as $row)
            <tr>
                <td>{{$i++}}</td>
                <td>{{$row->email_id}}</td>
                <td> {{$row->slug}} </td>                
                <td> {{$row->ip}} </td>                
                <td>
                    @if($row->status)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">Inctive</span>
                    @endif
                </td>
                <td>{{datetimeFormatter($row->created_at)}}</td> 
            </tr>
            @endforeach
    </table>
      </div>
   </div>
   <!-- end card-body-->
</div>
@endsection

@section("page.scripts")
<script>
    var responseHandler = function(response) {
        location.reload();
    }
</script>
@endsection