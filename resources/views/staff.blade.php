<x-app-layout>
    <div class="py-12">
        <style>
            .garbage-table {
                width: 100%;
                border-collapse: collapse;
                margin-top: 20px;
            }

            .garbage-table th,
            .garbage-table td {
                padding: 8px;
                text-align: left;
                border-bottom: 1px solid #ccc;
            }

            .garbage-table th {
                background-color: #232628;
                color: white;
            }

            .status-action {
                display: flex;
                align-items: center;

            }

            .dropdown {
                position: relative;
                display: inline-block;
            }

            .dropdown-toggle {
                background-color: #232628;
                border: none;
                color: white;
                padding: 10px;
                cursor: pointer;
                width: 120px;
                text-align: center;
                font-size: 14px;
                font-weight: bold;
                text-transform: capitalize;
                transition: background-color 0.3s ease;
                border-radius: 5px;
                margin-right: 10px;
            }

            .dropdown-menu {
                position: absolute;
                background-color: #f9f9f9;
                min-width: 120px;
                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                z-index: 1;
                display: none;
            }

            .dropdown-menu a {
                color: #333;
                padding: 8px 12px;
                text-decoration: none;
                display: block;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .dropdown-menu a:hover {
                background-color: #ddd;
            }

            .dropdown:hover .dropdown-menu {
                display: block;
            }

            .dropdown.active .dropdown-toggle {
                background-color: lightgreen;
            }

            .update-button {
                background-color: #4CAF50;
                color: white;
                border: none;
                padding: 5px 10px;
                text-align: center;
                text-decoration: none;
                cursor: pointer;
                font-size: 14px;
                font-weight: bold;
                text-transform: uppercase;
                border-radius: 5px;
            }

            h1 {
                text-align: center;
            }
            .new{
                background-color: #ef6339;
                color: white;
            }
        
        </style>

        @if (session('success'))
            <div class="alert alert-success"
                 style="background-color: #28a745; color: #fff; padding: 10px; margin-bottom: 10px;">
                {{ session('success') }}
            </div>
        @endif
        <div class="new">
        <h1>Garbage Collector</h1>
        </div>
        <table class="garbage-table">
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Name</th>
                <th>Time</th>
                <th>City</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
            @foreach ($pendingOperations as $operation)
                <tr>
                    <td>{{ $operation->id }}</td>
                    <td>{{ $operation->date }}</td>
                    <td>{{ $operation->cname }}</td>
                    <td>{{ $operation->time }}</td>
                    <td>{{ $operation->city }}</td>
                    <td>{{ $operation->message }}</td>
                    <td>
                        <div class="status-action">
                            <div class="dropdown {{ $operation->status === 'Completed' ? 'active' : '' }}">
                                <button class="dropdown-toggle" type="button" id="dropdown-toggle-{{ $operation->id }}">
                                    {{ ucfirst($operation->status) }}
                                </button>
                                <div class="dropdown-menu">
                                    <a href="#" onclick="event.preventDefault();
                                        updateStatus('{{ $operation->id }}', 'Completed');">
                                        Completed
                                    </a>
                                    <a href="#" onclick="event.preventDefault();
                                        updateStatus('{{ $operation->id }}', 'Pending');">
                                        Pending
                                    </a>
                                </div>
                            </div>
                            <form id="status-form-{{ $operation->id }}"
                                  action="{{ route('updateStatus', ['id' => $operation->id]) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="{{ $operation->status }}">
                                <button type="submit" class="update-button">Update</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>

        <script>
            function updateStatus(operationId, status) {
                const button = document.getElementById('dropdown-toggle-' + operationId);
                button.textContent = status.charAt(0).toUpperCase() + status.slice(1);
                const form = document.getElementById('status-form-' + operationId);
                form.elements.status.value = status;
            }
        </script>
    </div>
</x-app-layout>


