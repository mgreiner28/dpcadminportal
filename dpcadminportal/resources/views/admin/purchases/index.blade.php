@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.purchases.title')</h3>
    @can('purchase_create')
    <p>
        <a href="{{ route('admin.purchases.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
                
        @if(!is_null(Auth::getUser()->role_id) && config('quickadmin.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('Purchase.filter', 'all') == 'my')
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
            <table class="table table-bordered table-striped {{ count($purchases) > 0 ? 'datatable' : '' }} @can('purchase_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('purchase_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.purchases.fields.file-number')</th>
                        <th>@lang('quickadmin.purchases.fields.client')</th>
                        <th>@lang('quickadmin.purchases.fields.property')</th>
                        <th>@lang('quickadmin.purchases.fields.city-town-village')</th>
                        <th>@lang('quickadmin.purchases.fields.county')</th>
                        <th>@lang('quickadmin.purchases.fields.seller')</th>
                        <th>@lang('quickadmin.purchases.fields.agent')</th>
                        <th>@lang('quickadmin.purchases.fields.seller-attorney')</th>
                        <th>@lang('quickadmin.purchases.fields.bank-attorney')</th>
                        <th>@lang('quickadmin.purchases.fields.rep-agmt')</th>
                        <th>@lang('quickadmin.purchases.fields.approval-letter')</th>
                        <th>@lang('quickadmin.purchases.fields.seller-approval-letter')</th>
                        <th>@lang('quickadmin.purchases.fields.search-update-received')</th>
                        <th>@lang('quickadmin.purchases.fields.survey-update-received')</th>
                        <th>@lang('quickadmin.purchases.fields.tax-receipts')</th>
                        <th>@lang('quickadmin.purchases.fields.sewer-water-compliance-tax')</th>
                        <th>@lang('quickadmin.purchases.fields.pina')</th>
                        <th>@lang('quickadmin.purchases.fields.proposed-deed-received')</th>
                        <th>@lang('quickadmin.purchases.fields.mortgage-commitment')</th>
                        <th>@lang('quickadmin.purchases.fields.mc-rate-lock-expiration')</th>
                        <th>@lang('quickadmin.purchases.fields.mortgage-commitment-sent-to-seller-attorney')</th>
                        <th>@lang('quickadmin.purchases.fields.survey-taxes-and-deed')</th>
                        <th>@lang('quickadmin.purchases.fields.ordered-title-insurance')</th>
                        <th>@lang('quickadmin.purchases.fields.title-report-to-seller')</th>
                        <th>@lang('quickadmin.purchases.fields.title-report-to-bank')</th>
                        <th>@lang('quickadmin.purchases.fields.hoi-binder')</th>
                        <th>@lang('quickadmin.purchases.fields.hoi-binder-receipts')</th>
                        <th>@lang('quickadmin.purchases.fields.closing-statement-received')</th>
                        <th>@lang('quickadmin.purchases.fields.closing-statement-to-bank')</th>
                        <th>@lang('quickadmin.purchases.fields.closing-date')</th>
                        <th>@lang('quickadmin.purchases.fields.notes')</th>
                        <th>@lang('quickadmin.purchases.fields.internal-notes')</th>
                        <th>@lang('quickadmin.purchases.fields.rates')</th>
                        <th>@lang('quickadmin.purchases.fields.assigned-to')</th>
                        <th>@lang('quickadmin.purchases.fields.created-by')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($purchases) > 0)
                        @foreach ($purchases as $purchase)
                            <tr data-entry-id="{{ $purchase->id }}">
                                @can('purchase_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $purchase->file_number }}</td>
                                <td>{{ $purchase->client }}</td>
                                <td>{{ $purchase->property }}</td>
                                <td>{{ $purchase->city_town_village }}</td>
                                <td>{{ $purchase->county }}</td>
                                <td>{{ $purchase->seller }}</td>
                                <td>{{ $purchase->agent }}</td>
                                <td>{{ $purchase->seller_attorney }}</td>
                                <td>{{ $purchase->bank_attorney }}</td>
                                <td>{{ $purchase->rep_agmt }}</td>
                                <td>{{ $purchase->approval_letter }}</td>
                                <td>{{ $purchase->seller_approval_letter }}</td>
                                <td>{{ $purchase->search_update_received }}</td>
                                <td>{{ $purchase->survey_update_received }}</td>
                                <td>{{ $purchase->tax_receipts }}</td>
                                <td>{{ $purchase->sewer_water_compliance_tax }}</td>
                                <td>{{ $purchase->pina }}</td>
                                <td>{{ $purchase->proposed_deed_received }}</td>
                                <td>{{ $purchase->mortgage_commitment }}</td>
                                <td>{{ $purchase->mc_rate_lock_expiration }}</td>
                                <td>{{ $purchase->mortgage_commitment_sent_to_seller_attorney }}</td>
                                <td>{{ $purchase->survey_taxes_and_deed }}</td>
                                <td>{{ $purchase->ordered_title_insurance }}</td>
                                <td>{{ $purchase->title_report_to_seller }}</td>
                                <td>{{ $purchase->title_report_to_bank }}</td>
                                <td>{{ $purchase->hoi_binder }}</td>
                                <td>{{ $purchase->hoi_binder_receipts }}</td>
                                <td>{{ $purchase->closing_statement_received }}</td>
                                <td>{{ $purchase->closing_statement_to_bank }}</td>
                                <td>{{ $purchase->closing_date }}</td>
                                <td>{!! $purchase->notes !!}</td>
                                <td>{!! $purchase->internal_notes !!}</td>
                                <td>{{ $purchase->rates }}</td>
                                <td>{{ $purchase->assigned_to->name or '' }}</td>
                                <td>{{ $purchase->created_by->name or '' }}</td>
                                <td>
                                    @can('purchase_view')
                                    <a href="{{ route('admin.purchases.show',[$purchase->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('purchase_edit')
                                    <a href="{{ route('admin.purchases.edit',[$purchase->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('purchase_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.purchases.destroy', $purchase->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="38">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('purchase_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.purchases.mass_destroy') }}';
        @endcan

    </script>
@endsection