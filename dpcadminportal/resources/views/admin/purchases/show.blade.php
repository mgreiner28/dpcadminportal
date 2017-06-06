@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.purchases.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.file-number')</th>
                            <td>{{ $purchase->file_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.client')</th>
                            <td>{{ $purchase->client }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.property')</th>
                            <td>{{ $purchase->property }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.city-town-village')</th>
                            <td>{{ $purchase->city_town_village }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.county')</th>
                            <td>{{ $purchase->county }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.seller')</th>
                            <td>{{ $purchase->seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.agent')</th>
                            <td>{{ $purchase->agent }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.seller-attorney')</th>
                            <td>{{ $purchase->seller_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.bank-attorney')</th>
                            <td>{{ $purchase->bank_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.rep-agmt')</th>
                            <td>{{ $purchase->rep_agmt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.approval-letter')</th>
                            <td>{{ $purchase->approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.seller-approval-letter')</th>
                            <td>{{ $purchase->seller_approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.search-update-received')</th>
                            <td>{{ $purchase->search_update_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.survey-update-received')</th>
                            <td>{{ $purchase->survey_update_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.tax-receipts')</th>
                            <td>{{ $purchase->tax_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.sewer-water-compliance-tax')</th>
                            <td>{{ $purchase->sewer_water_compliance_tax }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.pina')</th>
                            <td>{{ $purchase->pina }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.proposed-deed-received')</th>
                            <td>{{ $purchase->proposed_deed_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.mortgage-commitment')</th>
                            <td>{{ $purchase->mortgage_commitment }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.mc-rate-lock-expiration')</th>
                            <td>{{ $purchase->mc_rate_lock_expiration }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.mortgage-commitment-sent-to-seller-attorney')</th>
                            <td>{{ $purchase->mortgage_commitment_sent_to_seller_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.survey-taxes-and-deed')</th>
                            <td>{{ $purchase->survey_taxes_and_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.ordered-title-insurance')</th>
                            <td>{{ $purchase->ordered_title_insurance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.title-report-to-seller')</th>
                            <td>{{ $purchase->title_report_to_seller }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.title-report-to-bank')</th>
                            <td>{{ $purchase->title_report_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.hoi-binder')</th>
                            <td>{{ $purchase->hoi_binder }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.hoi-binder-receipts')</th>
                            <td>{{ $purchase->hoi_binder_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.closing-statement-received')</th>
                            <td>{{ $purchase->closing_statement_received }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.closing-statement-to-bank')</th>
                            <td>{{ $purchase->closing_statement_to_bank }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.closing-date')</th>
                            <td>{{ $purchase->closing_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.notes')</th>
                            <td>{!! $purchase->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.internal-notes')</th>
                            <td>{!! $purchase->internal_notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.rates')</th>
                            <td>{{ $purchase->rates }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.purchases.fields.created-by')</th>
                            <td>{{ $purchase->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.purchases.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop