@section('title', 'Task Management')
<x-app-layout>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session("success") }}
        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert"
            aria-label="Close"
        ></button>
    </div>
    @endif
    <div class="page-body">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <h2 class="page-title">Task Management</h2>
                </div>
                <!-- Page title actions -->
                <div class="col-auto ms-auto d-print-none">
                    <div class="btn-list">
                        <a
                            href="#"
                            class="btn btn-primary d-none d-sm-inline-block"
                            data-bs-toggle="modal"
                            data-bs-target="#project-modal"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Add new Project
                        </a>
                        <a
                            href="#"
                            class="btn btn-primary d-none d-sm-inline-block"
                            data-bs-toggle="modal"
                            data-bs-target="#modal-company"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Add new task
                        </a>
                    </div>
                </div>
            </div>
            <!-- Display Projects -->
            <div class="mt-4 col-lg-4">
                <p class="h4 mb-2">Projects</p>
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th class="w-1">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($data) @foreach($data as $datas)
                                <tr>
                                    <td>{{ $datas["id"] }}</td>
                                    <td class="text-secondary">
                                        {{ $datas["name"] }}
                                    </td>
                                    <td class="d-flex gap-3">
                                        <a
                                            href="{{ $datas['id'] }}"
                                            class="btn btn-secondary"
                                            >Edit</a
                                        >
                                        <form
                                            action="{{ route('project.delete', ['id' => $datas['id']])}}"
                                            method="post"
                                        >
                                            @csrf
                                            <button
                                                class="btn btn-danger"
                                                type="submit"
                                            >
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project Modal -->
    <div
        class="modal modal-blur fade"
        id="project-modal"
        tabindex="-1"
        role="dialog"
        aria-modal="true"
    >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Project</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="{{ route('project.create') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="project-name"
                                >Name of the Project</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="project-name"
                                name="name"
                                class="form-control"
                                placeholder="Enter project name"
                                required
                            />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a
                            href="#"
                            class="btn btn-link link-secondary"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </a>
                        <button class="btn btn-primary ms-auto">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Task Modal -->
    <div
        class="modal modal-blur fade"
        id="modal-company"
        tabindex="-1"
        role="dialog"
        aria-modal="true"
    >
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Task</h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                    ></button>
                </div>
                <form action="{{ route('task.create') }}" method="post">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="task-title"
                                >Name of the Task</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="task-title"
                                name="task-name"
                                class="form-control"
                                placeholder="Enter the name of the task"
                                required
                            />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="task-description"
                                >Task Description</label
                            >
                            <textarea
                                id="task-description"
                                name="description"
                                class="form-control"
                                rows="3"
                                placeholder="Tell us what needs to be done in this task."
                                required
                            ></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="mb-3">
                                    <label class="form-label" for="project"
                                        >Select Project</label
                                    >
                                    <select
                                        id="project"
                                        name="project"
                                        class="form-control"
                                        required
                                    >
                                        <option disabled selected>
                                            Select the project
                                        </option>
                                        <option value="1">Project 1</option>
                                        <option value="2">Project 2</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label
                                        class="form-label"
                                        for="task-priority"
                                        >Priority</label
                                    >
                                    <select
                                        id="task-priority"
                                        name="priority"
                                        class="form-control"
                                    >
                                        <option value="low">Low</option>
                                        <option value="medium">Medium</option>
                                        <option value="high">High</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a
                            href="#"
                            class="btn btn-link link-secondary"
                            data-bs-dismiss="modal"
                        >
                            Cancel
                        </a>
                        <button class="btn btn-primary ms-auto">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon"
                            >
                                <path
                                    stroke="none"
                                    d="M0 0h24v24H0z"
                                    fill="none"
                                ></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Create
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
