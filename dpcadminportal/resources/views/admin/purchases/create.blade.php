@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.purchases.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.purchases.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('file_number', 'File Number', ['class' => 'control-label']) !!}
                    {!! Form::text('file_number', old('file_number'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('file_number'))
                        <p class="help-block">
                            {{ $errors->first('file_number') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('client', 'Client', ['class' => 'control-label']) !!}
                    {!! Form::text('client', old('client'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('client'))
                        <p class="help-block">
                            {{ $errors->first('client') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('property', 'Property', ['class' => 'control-label']) !!}
                    {!! Form::text('property', old('property'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('property'))
                        <p class="help-block">
                            {{ $errors->first('property') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('city_town_village', 'City/Town/Village', ['class' => 'control-label']) !!}
                    {!! Form::text('city_town_village', old('city_town_village'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('city_town_village'))
                        <p class="help-block">
                            {{ $errors->first('city_town_village') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('county', 'County', ['class' => 'control-label']) !!}
                    {!! Form::text('county', old('county'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('county'))
                        <p class="help-block">
                            {{ $errors->first('county') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller', 'Seller', ['class' => 'control-label']) !!}
                    {!! Form::text('seller', old('seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller'))
                        <p class="help-block">
                            {{ $errors->first('seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('agent', 'Agent', ['class' => 'control-label']) !!}
                    {!! Form::text('agent', old('agent'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('agent'))
                        <p class="help-block">
                            {{ $errors->first('agent') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller_attorney', 'Seller Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('seller_attorney', old('seller_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller_attorney'))
                        <p class="help-block">
                            {{ $errors->first('seller_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('bank_attorney', 'Bank Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('bank_attorney', old('bank_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('bank_attorney'))
                        <p class="help-block">
                            {{ $errors->first('bank_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rep_agmt', 'Rep. Agmt.', ['class' => 'control-label']) !!}
                    {!! Form::text('rep_agmt', old('rep_agmt'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rep_agmt'))
                        <p class="help-block">
                            {{ $errors->first('rep_agmt') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('approval_letter', 'Approval Letter', ['class' => 'control-label']) !!}
                    {!! Form::text('approval_letter', old('approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('seller_approval_letter', 'Seller Approval Letter', ['class' => 'control-label']) !!}
                    {!! Form::text('seller_approval_letter', old('seller_approval_letter'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('seller_approval_letter'))
                        <p class="help-block">
                            {{ $errors->first('seller_approval_letter') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('search_update_received', 'Search Update Received', ['class' => 'control-label']) !!}
                    {!! Form::text('search_update_received', old('search_update_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('search_update_received'))
                        <p class="help-block">
                            {{ $errors->first('search_update_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_update_received', 'Survey Update Received', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_update_received', old('survey_update_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_update_received'))
                        <p class="help-block">
                            {{ $errors->first('survey_update_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tax_receipts', 'Tax Receipts', ['class' => 'control-label']) !!}
                    {!! Form::text('tax_receipts', old('tax_receipts'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tax_receipts'))
                        <p class="help-block">
                            {{ $errors->first('tax_receipts') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('sewer_water_compliance_tax', 'Sewer/Water/Compliance Tax Certificates', ['class' => 'control-label']) !!}
                    {!! Form::text('sewer_water_compliance_tax', old('sewer_water_compliance_tax'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('sewer_water_compliance_tax'))
                        <p class="help-block">
                            {{ $errors->first('sewer_water_compliance_tax') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('pina', 'PINA', ['class' => 'control-label']) !!}
                    {!! Form::text('pina', old('pina'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('pina'))
                        <p class="help-block">
                            {{ $errors->first('pina') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('proposed_deed_received', 'Proposed Deed Received', ['class' => 'control-label']) !!}
                    {!! Form::text('proposed_deed_received', old('proposed_deed_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('proposed_deed_received'))
                        <p class="help-block">
                            {{ $errors->first('proposed_deed_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_commitment', 'Mortgage Commitment', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_commitment', old('mortgage_commitment'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_commitment'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_commitment') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mc_rate_lock_expiration', 'MC Rate Lock Expiration', ['class' => 'control-label']) !!}
                    {!! Form::text('mc_rate_lock_expiration', old('mc_rate_lock_expiration'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mc_rate_lock_expiration'))
                        <p class="help-block">
                            {{ $errors->first('mc_rate_lock_expiration') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('mortgage_commitment_sent_to_seller_attorney', 'Mortgage Commitment Sent to Seller Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('mortgage_commitment_sent_to_seller_attorney', old('mortgage_commitment_sent_to_seller_attorney'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('mortgage_commitment_sent_to_seller_attorney'))
                        <p class="help-block">
                            {{ $errors->first('mortgage_commitment_sent_to_seller_attorney') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('survey_taxes_and_deed', 'Survey, Taxes, & Deed Sent to Bank Attorney', ['class' => 'control-label']) !!}
                    {!! Form::text('survey_taxes_and_deed', old('survey_taxes_and_deed'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('survey_taxes_and_deed'))
                        <p class="help-block">
                            {{ $errors->first('survey_taxes_and_deed') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('ordered_title_insurance', 'Ordered Title Insurance', ['class' => 'control-label']) !!}
                    {!! Form::text('ordered_title_insurance', old('ordered_title_insurance'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ordered_title_insurance'))
                        <p class="help-block">
                            {{ $errors->first('ordered_title_insurance') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_to_seller', 'Title Report to Seller', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_to_seller', old('title_report_to_seller'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_to_seller'))
                        <p class="help-block">
                            {{ $errors->first('title_report_to_seller') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('title_report_to_bank', 'Title Report to Bank', ['class' => 'control-label']) !!}
                    {!! Form::text('title_report_to_bank', old('title_report_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('title_report_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('title_report_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hoi_binder', 'HOI Binder', ['class' => 'control-label']) !!}
                    {!! Form::text('hoi_binder', old('hoi_binder'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hoi_binder'))
                        <p class="help-block">
                            {{ $errors->first('hoi_binder') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('hoi_binder_receipts', 'HOI Binder/Receipt to Bank', ['class' => 'control-label']) !!}
                    {!! Form::text('hoi_binder_receipts', old('hoi_binder_receipts'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('hoi_binder_receipts'))
                        <p class="help-block">
                            {{ $errors->first('hoi_binder_receipts') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_received', 'Closing Statement Received', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_received', old('closing_statement_received'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_received'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_received') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_statement_to_bank', 'Closing Statement to Bank', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_statement_to_bank', old('closing_statement_to_bank'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_statement_to_bank'))
                        <p class="help-block">
                            {{ $errors->first('closing_statement_to_bank') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('closing_date', 'Closing Date', ['class' => 'control-label']) !!}
                    {!! Form::text('closing_date', old('closing_date'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('closing_date'))
                        <p class="help-block">
                            {{ $errors->first('closing_date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('notes', 'Notes', ['class' => 'control-label']) !!}
                    {!! Form::textarea('notes', old('notes'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('notes'))
                        <p class="help-block">
                            {{ $errors->first('notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('internal_notes', 'Internal Notes', ['class' => 'control-label']) !!}
                    {!! Form::textarea('internal_notes', old('internal_notes'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('internal_notes'))
                        <p class="help-block">
                            {{ $errors->first('internal_notes') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('rates', 'Rates', ['class' => 'control-label']) !!}
                    {!! Form::text('rates', old('rates'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('rates'))
                        <p class="help-block">
                            {{ $errors->first('rates') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

