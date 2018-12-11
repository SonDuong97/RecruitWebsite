@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>id</th>
                                <th>link</th>
                                <th>logo</th>
                                <th>name</th>
                                <th>address</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                            <tr class="even gradeC" align="center">

                                <td>{{ $company->id }}</td>
                                <td>{{ $company->link }}</td>
                                <td>{{ $company->logo }}</td>
                                <td>{{ $company->name }}</td>
                                <td>{{ $company->address->name }}</td>
                                <td class="center"><form action="{{ route('admin.companies.destroy', $company->id) }}" method="POST">
                            @csrf
                                <input id="delete" type="submit" name="Delete">
                            </form></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection