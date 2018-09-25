@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.sales.title')</h3>
    @can('sale_create')
    <p>
        <a href="{{ route('admin.sales.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
                
        @if(!is_null(Auth::getUser()->role_id) && config('quickadmin.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('Sale.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($sales) > 0 ? 'datatable' : '' }} @can('sale_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('sale_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.sales.fields.file-number')</th>
                        <th>@lang('quickadmin.sales.fields.client')</th>
                        <th>@lang('quickadmin.sales.fields.property')</th>
                        <th>@lang('quickadmin.sales.fields.city-town-village')</th>
                        <th>@lang('quickadmin.sales.fields.county')</th>
                        <th>@lang('quickadmin.sales.fields.buyer')</th>
                        <th>@lang('quickadmin.sales.fields.agent')</th>
                        <th>@lang('quickadmin.sales.fields.buyer-attorney')</th>
                        <th>@lang('quickadmin.sales.fields.rep-agmt')</th>
                        <th>@lang('quickadmin.sales.fields.approval-letter')</th>
                        <th>@lang('quickadmin.sales.fields.buyer-approval-letter')</th>
                        <th>@lang('quickadmin.sales.fields.search-update')</th>
                        <th>@lang('quickadmin.sales.fields.survey-update')</th>
                        <th>@lang('quickadmin.sales.fields.tax-receipts')</th>
                        <th>@lang('quickadmin.sales.fields.tax-certificate')</th>
                        <th>@lang('quickadmin.sales.fields.sewer-water-compliance')</th>
                        <th>@lang('quickadmin.sales.fields.proposed-deed')</th>
                        <th>@lang('quickadmin.sales.fields.mortgage-commitment')</th>
                        <th>@lang('quickadmin.sales.fields.seach-taxes-deed')</th>
                        <th>@lang('quickadmin.sales.fields.mortgage-payoff-info')</th>
                        <th>@lang('quickadmin.sales.fields.title-report-from-buyer')</th>
                        <th>@lang('quickadmin.sales.fields.closing-docs-drafted')</th>
                        <th>@lang('quickadmin.sales.fields.closing-statement')</th>
                        <th>@lang('quickadmin.sales.fields.closing-statement-to-buyer')</th>
                        <th>@lang('quickadmin.sales.fields.closing-date')</th>
                        <th>@lang('quickadmin.sales.fields.notes')</th>
                        <th>@lang('quickadmin.sales.fields.internal-notes')</th>
                        <th>@lang('quickadmin.sales.fields.rates')</th>
                        <th>@lang('quickadmin.sales.fields.assigned-to')</th>
                        <th>@lang('quickadmin.sales.fields.created-by')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($sales) > 0)
                        @foreach ($sales as $sale)
                            <tr data-entry-id="{{ $sale->id }}">
                                @can('sale_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $sale->file_number }}</td>
                                <td>{{ $sale->client }}</td>
                                <td>{{ $sale->property }}</td>
                                <td>{{ $sale->city_town_village }}</td>
                                <td>{{ $sale->county }}</td>
                                <td>{{ $sale->buyer }}</td>
                                <td>{{ $sale->agent }}</td>
                                <td>{{ $sale->buyer_attorney }}</td>
                                <td>{{ $sale->rep_agmt }}</td>
                                <td>{{ $sale->approval_letter }}</td>
                                <td>{{ $sale->buyer_approval_letter }}</td>
                                <td>{{ $sale->search_update }}</td>
                                <td>{{ $sale->survey_update }}</td>
                                <td>{{ $sale->tax_receipts }}</td>
                                <td>{{ $sale->tax_certificate }}</td>
                                <td>{{ $sale->sewer_water_compliance }}</td>
                                <td>{{ $sale->proposed_deed }}</td>
                                <td>{{ $sale->mortgage_commitment }}</td>
                                <td>{{ $sale->seach_taxes_deed }}</td>
                                <td>{{ $sale->mortgage_payoff_info }}</td>
                                <td>{{ $sale->title_report_from_buyer }}</td>
                                <td>{{ $sale->closing_docs_drafted }}</td>
                                <td>{{ $sale->closing_statement }}</td>
                                <td>{{ $sale->closing_statement_to_buyer }}</td>
                                <td>{{ $sale->closing_date }}</td>
                                <td>{!! $sale->notes !!}</td>
                                <td>{!! $sale->internal_notes !!}</td>
                                <td>{{ $sale->rates }}</td>
                                <td>{{ $sale->assigned_to->name or '' }}</td>
                                <td>{{ $sale->created_by->name or '' }}</td>
                                <td>
                                    @can('sale_view')
                                    <a href="{{ route('admin.sales.show',[$sale->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('sale_edit')
                                    <a href="{{ route('admin.sales.edit',[$sale->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('sale_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.sales.destroy', $sale->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="33">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('sale_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.sales.mass_destroy') }}';
        @endcan

    </script>
@endsection