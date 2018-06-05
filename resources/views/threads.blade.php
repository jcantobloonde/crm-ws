{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('name', 'Name:') !!}
			{!! Form::text('name') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('status', 'Status:') !!}
			{!! Form::text('status') !!}
		</li>
		<li>
			{!! Form::label('interest', 'Interest:') !!}
			{!! Form::text('interest') !!}
		</li>
		<li>
			{!! Form::label('source', 'Source:') !!}
			{!! Form::text('source') !!}
		</li>
		<li>
			{!! Form::label('created_at', 'Created_at:') !!}
			{!! Form::text('created_at') !!}
		</li>
		<li>
			{!! Form::label('updated_at', 'Updated_at:') !!}
			{!! Form::text('updated_at') !!}
		</li>
		<li>
			{!! Form::label('contact_id', 'Contact_id:') !!}
			{!! Form::text('contact_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}