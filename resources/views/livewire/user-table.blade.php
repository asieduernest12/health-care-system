<div>

	@include('backend.admins.users.header')
	
	<table class="table mb-0">
		<thead>
			<tr>
				<th>First Name</th>
				<th>Role</th>
				<th>Last Name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($users as $user)	
			<tr>
				<td>{{ $user->name }}</td>
				<td>
					@foreach ($user->getRoleNames() as $role)
						{{ Str::ucfirst('-', ' ', $role) }}
					@endforeach
				</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->gender }}</td>
			</tr>
			@empty
				<tr>
					<td class="text-lg">No Users Found</td>
				</tr>
			@endforelse
		</tbody>
	</table>
</div>