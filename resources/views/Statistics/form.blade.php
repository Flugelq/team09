

{!! Form::label('category', '統計項目別') !!}
{!! Form::text('category', null) !!}
</br>
{!! Form::label('subcategory', '細項') !!}
{!! Form::text('subcategory', null) !!}
</br>
{!! Form::label('sample_size', '樣本數（人）') !!}
{!! Form::text('sample_size', null) !!}
</br>
{!! Form::label('very_satisfied_pct', '很滿意（%）') !!}
{!! Form::text('very_satisfied_pct', null) !!}
</br>
{!! Form::label('satisfied_pct', '滿意（%）') !!}
{!! Form::text('satisfied_pct', null) !!}
</br>
{!! Form::label('neutral_pct', '普通（%）') !!}
{!! Form::text('neutral_pct', null) !!}
</br>
{!! Form::label('dissatisfied_pct', '不滿意（%）') !!}
{!! Form::text('dissatisfied_pct', null) !!}
</br>
{!! Form::label('very_dissatisfied_pct', '很不滿意（%）') !!}
{!! Form::text('very_dissatisfied_pct', null) !!}
</br>
{!! Form::submit($submitButtonText) !!}

{!! Form::close() !!}
