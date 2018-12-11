@extends('admin.layout.index')
@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Job
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>category</th>
                                <th>address</th>
                                <th>user</th>
                                <th>Delete</th>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)

                            <tr class="even gradeC" align="center">
                                <td>{{ $job->id }}</td>
                                <td>{{ $job->title }}</td>
                                <td>{{ $job->description }}</td>
                                <td>{{ $job->category->name}}</td>
                                <td>{{ $job->address->name}}</td>
                                <td>{{ $job->user->name}}</td>
                                <td class="center"><form action="{{ route('admin.jobs.destroy', $job->id) }}" method="POST">
                            @csrf
                                <input id="delete" type="submit" name="Delete">
                            </form></td>
                                
                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <script >
        </script>

@endsection