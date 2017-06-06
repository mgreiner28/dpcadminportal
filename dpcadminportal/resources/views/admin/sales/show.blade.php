@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.sales.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.sales.fields.file-number')</th>
                            <td>{{ $sale->file_number }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.client')</th>
                            <td>{{ $sale->client }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.property')</th>
                            <td>{{ $sale->property }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.city-town-village')</th>
                            <td>{{ $sale->city_town_village }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.county')</th>
                            <td>{{ $sale->county }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.buyer')</th>
                            <td>{{ $sale->buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.agent')</th>
                            <td>{{ $sale->agent }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.buyer-attorney')</th>
                            <td>{{ $sale->buyer_attorney }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.rep-agmt')</th>
                            <td>{{ $sale->rep_agmt }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.approval-letter')</th>
                            <td>{{ $sale->approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.buyer-approval-letter')</th>
                            <td>{{ $sale->buyer_approval_letter }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.search-update')</th>
                            <td>{{ $sale->search_update }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.survey-update')</th>
                            <td>{{ $sale->survey_update }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.tax-receipts')</th>
                            <td>{{ $sale->tax_receipts }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.tax-certificate')</th>
                            <td>{{ $sale->tax_certificate }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.sewer-water-compliance')</th>
                            <td>{{ $sale->sewer_water_compliance }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.proposed-deed')</th>
                            <td>{{ $sale->proposed_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.mortgage-commitment')</th>
                            <td>{{ $sale->mortgage_commitment }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.seach-taxes-deed')</th>
                            <td>{{ $sale->seach_taxes_deed }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.mortgage-payoff-info')</th>
                            <td>{{ $sale->mortgage_payoff_info }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.title-report-from-buyer')</th>
                            <td>{{ $sale->title_report_from_buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.closing-docs-drafted')</th>
                            <td>{{ $sale->closing_docs_drafted }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.closing-statement')</th>
                            <td>{{ $sale->closing_statement }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.closing-statement-to-buyer')</th>
                            <td>{{ $sale->closing_statement_to_buyer }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.closing-date')</th>
                            <td>{{ $sale->closing_date }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.notes')</th>
                            <td>{!! $sale->notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.internal-notes')</th>
                            <td>{!! $sale->internal_notes !!}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.rates')</th>
                            <td>{{ $sale->rates }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.sales.fields.created-by')</th>
                            <td>{{ $sale->created_by->name or '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.sales.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop