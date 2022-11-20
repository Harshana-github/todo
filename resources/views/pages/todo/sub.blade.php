@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-title">My Sub Task List</h1>
                <h5 class="page-task-main">{{ $tasks->title }}</h5>
            </div>
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Create New Sub Task</h3>
                    </div>
                    <div class="card-body">
                        <form action={{ route('todo.sub.store') }} method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="pt-3 row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="text" name="sub_title"
                                                    placeholder="Enter Sub Title" maxlength="20" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <input class="form-control" type="number" name="phone"
                                                    placeholder="Enter Phone Number" maxlength="10"
                                                    oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <select name="priority" id="priority" class="form-control" required>
                                                    <option value="1">Priority 1</option>
                                                    <option value="2">Priority 2</option>
                                                    <option value="3">Priority 3</option>
                                                    <option value="4">Priority 4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <textarea name="note" id="note" cols="30" rows="1" placeholder="Enter Note" class="form-control"
                                                    required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input class="form-control" type="date" name="date"
                                                    placeholder="Enter Date" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center col-lg-12 mt-2">
                                    <input type="hidden" name="task_id" value="{{ $tasks->id }}">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 mt-5">
                <div>
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Sub Title</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Note</th>
                                <th scope="col">Date</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sub_tasks as $key => $sub_task)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $sub_task->sub_title }}</td>
                                    <td>{{ $sub_task->phone }}</td>
                                    <td>{{ $sub_task->priority }}</td>
                                    <td>{{ $sub_task->note }}</td>
                                    <td>{{ $sub_task->date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 5vh;
            font-size: 4rem;
            color: #14a333;
        }

        .page-task-main {
            font-size: 3rem;
            color: rgb(46, 83, 247);
        }
    </style>
@endpush

@push('js')
    <script></script>
@endpush
