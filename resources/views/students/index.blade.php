@extends('layouts.app')

@section('content')
    <div class="card shadow-none">
        <div class="card-body p-0 pb-3">
            <div class="d-flex align-items-center justify-content-end my-3">
                <div id="bulk-select-replace-element"><button class="btn btn-falcon-success btn-sm" type="button"><span
                            class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span><span
                            class="ms-1">New</span></button></div>
                <div class="d-none ms-3" id="bulk-select-actions">
                    <div class="d-flex"><select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="selected">Bulk actions</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                        </select><button class="btn btn-falcon-danger btn-sm ms-2" type="button">Apply</button></div>
                </div>
            </div>
            <div class="table-responsive scrollbar">
                <table class="table mb-0">
                    <thead class="text-black bg-200">
                        <tr>
                            <th class="align-middle white-space-nowrap">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                        data-bulk-select='{"body":"bulk-select-body","actions":"bulk-select-actions","replacedElement":"bulk-select-replace-element"}' />
                                </div>
                            </th>
                            <th class="align-middle">ACK ID</th>
                            <th class="align-middle">LABEL </th>
                            <th class="align-middle">STUDENT NAME</th>
                            <th class="align-middle ">MOBILE</th>
                            <th class="align-middle ">SOURCE</th>
                            <th class="align-middle ">BRANCH</th>
                            <th class="align-middle ">MY STATUS</th>
                            <th class="align-middle ">ASSIGNED</th>
                            <th class="align-middle ">DOCS</th>
                            <th class="align-middle ">ENROLL/APP./TIMELINE</th>

                        </tr>
                    </thead>
                    <tbody id="bulk-select-body">
                        @foreach ($students as $student)
                            <tr>
                                <td class="align-middle white-space-nowrap">
                                    <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                            id="checkbox-1" data-bulk-select-row="data-bulk-select-row" /></div>
                                </td>
                                <th class="align-middle">ACK{{ $student->id }}</th>
                                <td class="align-middle">Add Label</td>
                                <td class="align-middle">{{$student->fname." ".$student->lname}}</td>
                                <td class="align-middle">{{$student->mobile}}</td>
                                <td class="align-middle">{{$student->source}}</td>
                                <td class="align-middle">{{$student->branch}}</td>
                                <td class="align-middle">{{$student->mystatus}}</td>
                                <td class="align-middle">--</td>
                                <td class="align-middle">{{$student->documents->count()}}</td>
                                <td class="align-middle">ENROLL/APP./TIMELINE</td>

                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
