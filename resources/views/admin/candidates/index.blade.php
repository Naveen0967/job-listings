@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        {{ trans('cruds.candidate.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Candidate">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.job_title') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.candidate_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.candidate_email') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.candidate_phone') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.resume') }}
                        </th>
                        <th>
                            {{ trans('cruds.candidate.fields.date') }}
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($applyedJobs as $key => $jobs)
                        <tr data-entry-id="{{ $jobs['id'] }}">
                            <td>
                
                            </td>
                            <td>
                                {{ $jobs['id'] ?? '' }}
                            </td>
                            <td>
                                {{ $jobs['jobTitle'] ?? '' }}
                            </td>
                            <td>
                                {{ $jobs['CandidateName'] ?? '' }}
                            </td>
                            <td>
                                {{ $jobs['email'] ?? '' }}
                            </td>
                            <td>
                                {{ $jobs['phone'] ?? '' }}
                            </td>
                            <td>
                                <a href="{{ "/".$jobs['resume']}}" > Download</a>
                            </td>
                            <td>
                                {{ $jobs['date'] ?? '' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-Candidate:not(.ajaxTable)').DataTable()
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection