@extends('admin.admin_layout')
@section('body')

    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                </div>
            </div>
        </div>
        <div class="box-content">

            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid"><div class="row-fluid"><div class="span6"><div id="DataTables_Table_0_length" class="dataTables_length"><label><select size="1" name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"><option value="10" selected="selected">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="span6"><div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text" aria-controls="DataTables_Table_0"></label></div></div></div><table class="table table-striped table-bordered bootstrap-datatable datatable dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info">


                    <table id="dt-basic-checkbox" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                        <tr role="row">
                            <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 172px;" aria-sort="ascending" aria-label="Username: activate to sort column descending">Category ID</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 250px;" aria-label="Date registered: activate to sort column ascending">Category Name</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 138px;" aria-label="Role: activate to sort column ascending">Category Description</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 145px;" aria-label="Status: activate to sort column ascending">Status</th>
                            <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 290px;" aria-label="Actions: activate to sort column ascending">Actions</th></tr>
                        </thead>

                        <tbody role="alert" aria-live="polite" aria-relevant="all">

                        {{--                        @foreach($brand as $row)--}}
                        @foreach($data as $row)

                            <tr class="odd">
                                <td class="  sorting_1">{{ $row->id  }}</td>
                                <td class="  sorting_1">{{ $row->BrandName  }}</td>
                                <td class="center ">{{ $row->BrandDiscription  }}</td>


                                <td class="center ">
                                    @if($row->PublicationStatus ==1)
                                        <span class="label label-success">Actide</span>
                                    @else
                                        <span class="label label-danger">Unactive</span>
                                    @endif
                                </td>


                                <td class="center">
                                    @if($row->PublicationStatus ==1)
                                        <a class="btn btn-success" href="{{ url('admin/Brand/Publication_status/ActiveBrand/'. $row->id) }}">
                                            <i class="halflings-icon white thumbs-up"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-danger" href="{{ url( 'admin/Brand/Publication_status/DeActiveBrand/'. $row->id) }}">
                                            <i class="halflings-icon white thumbs-down"></i>
                                        </a>

                                    @endif




                                    <a class="btn btn-info" href="{{ url('admin/Brand/edit_brand/'.$row->id) }}">
                                        <i class="halflings-icon white edit"></i>
                                    </a>

                                    <a class="btn btn-danger" href="{{ url('admin/Brand/delete_brand/'.$row->id) }}">
                                        <i class="halflings-icon white trash"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                    <div class="row-fluid"><div class="span12"><div class="dataTables_info" id="DataTables_Table_0_info">Showing 1 to 10 of 32 entries</div></div><div class="span12 center"><div class="dataTables_paginate paging_bootstrap pagination"><ul><li class="prev disabled"><a href="#">← Previous</a></li><li class="active"><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">3</a></li><li><a href="#">4</a></li><li class="next"><a href="#">Next → </a></li></ul></div></div></div></div>

        </div>



    </div><!--/span-->

    </div>

@endsection
