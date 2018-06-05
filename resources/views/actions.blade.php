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
			{!! Form::label('type', 'Type:') !!}
			{!! Form::text('type') !!}
		</li>
		<li>
			{!! Form::label('result', 'Result:') !!}
			{!! Form::textarea('result') !!}
		</li>
		<li>
			{!! Form::label('issue', 'Issue:') !!}
			{!! Form::textarea('issue') !!}
		</li>
		<li>
			{!! Form::label('nextDate', 'NextDate:') !!}
			{!! Form::text('nextDate') !!}
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
			{!! Form::label('thread_id', 'Thread_id:') !!}
			{!! Form::text('thread_id') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}