@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.users.fields.name')</th>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.email')</th>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.phone-number')</th>
                            <td>{{ $user->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.users.fields.role')</th>
                            <td>{{ $user->role->title or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#internalnotifications" aria-controls="internalnotifications" role="tab" data-toggle="tab">Notifications</a></li>
<li role="presentation" class=""><a href="#sales" aria-controls="sales" role="tab" data-toggle="tab">Sales</a></li>
<li role="presentation" class=""><a href="#purchases" aria-controls="purchases" role="tab" data-toggle="tab">Purchases</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="internalnotifications">
<table class="table table-bordered table-striped {{ count($internal_notifications) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.internal-notifications.fields.text')</th>
                        <th>@lang('quickadmin.internal-notifications.fields.link')</th>
                        <th>@lang('quickadmin.internal-notifications.fields.users')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($internal_notifications) > 0)
            @foreach ($internal_notifications as $internal_notification)
                <tr data-entry-id="{{ $internal_notification->id }}">
                    <td>{{ $internal_notification->text }}</td>
                                <td>{{ $internal_notification->link }}</td>
                                <td>
                                    @foreach ($internal_notification->users as $singleUsers)
                                        <span class="label label-info label-many">{{ $singleUsers->name }}</span>
                                    @endforeach
                                </td>
                                <td>
                                    @can('internal_notification_view')
                                    <a href="{{ route('admin.internal_notifications.show',[$internal_notification->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('internal_notification_edit')
                                    <a href="{{ route('admin.internal_notifications.edit',[$internal_notification->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('internal_notification_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.internal_notifications.destroy', $internal_notification->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="7">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
<div role="tabpanel" class="tab-pane " id="sales">
<table class="table table-bordered table-striped {{ count($sales) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
                        <th>@lang('quickadmin.sales.fields.created-by')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($sales) > 0)
            @foreach ($sales as $sale)
                <tr data-entry-id="{{ $sale->id }}">
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
<div role="tabpanel" class="tab-pane " id="purchases">
<table class="table table-bordered table-striped {{ count($purchases) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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
                        <th>@lang('quickadmin.purchases.fields.created-by')</th>
                        <th>&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @if (count($purchases) > 0)
            @foreach ($purchases as $purchase)
                <tr data-entry-id="{{ $purchase->id }}">
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

            <p>&nbsp;</p>

            <a href="{{ route('admin.users.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop