@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Tasks</h2>
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
                Add Task
            </button>
            <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
                <li>
                    <form>
                        @csrf

                        <!-- Task Name -->
                        <div class="mb-3">
                            <label for="Task Name" class="form-label">Task Name</label>
                            <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter task name" required>
                        </div>

                        <!-- Task Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Task Description</label>
                            <textarea rows="5" cols="30" class="form-control" id="description" name="description" placeholder="Enter task description" required></textarea>
                        </div>

                        <!-- Project -->
                        <div class="mb-3">
                            <label for="project" class="form-label">Project</label>
                            <select class="form-select" id="project" name="project" required>
                                <option value="" disabled selected>Select a project</option> <!-- Placeholder option -->
                                <option value="Project A">project A</option>
                                <option value="Project B">project B</option>
                                <option value="Project C">project C</option>
                                <option value="Project D">project D</option>
                                <option value="Project E">project E</option>
                                <!-- Add more customers as needed -->
                            </select>
                        </div>

                        <!-- Start Date -->
                        <div class="mb-3">
                            <label for="startDate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" name="startDate" required>
                        </div>

                        <!-- End Date -->
                        <div class="mb-3">
                            <label for="endDate" class="form-label">End Date</label>
                            <input type="date" class="form-control" name="endDate" required>
                        </div>

                        <!-- Priority -->
                        <div class="mb-3">
                            <label for="priority" class="form-label">Priority</label>
                            <br>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="priority" value="High" id="priorityHigh" required>
                                <label class="form-check-label" for="priorityHigh">High Priority</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="priority" value="Medium" id="priorityMedium" required>
                                <label class="form-check-label" for="priorityMedium">Medium Priority</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="priority" value="Low" id="priorityLow" required>
                                <label class="form-check-label" for="priorityLow">Low Priority</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="priority" value="Optional" id="priorityOptional" required>
                                <label class="form-check-label" for="priorityOptional">Optional</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="radio" name="priority" value="Not Important" id="priorityNotImportant" required>
                                <label class="form-check-label" for="priorityNotImportant">Not Important</label>
                            </div>
                        </div>

                        <!-- Assigned Department -->
                        <div class="mb-3">
                            <label for="assignedDepartment" class="form-label">Assigned Department</label>
                            <select class="form-control" id="assignedDepartment" name="assignedDepartment" required>
                                <option selected disabled>Select Department</option>
                                <option value="all_Department">All Department</option>
                                <option value="purchaser">Purchaser</option>
                                <option value="marketing">Marketing</option>
                                <option value="sales">Sales</option>
                                <option value="logistics">Logistics</option>
                            </select>
                        </div>

                        <!-- Assignee -->
                        <div class="mb-3">
                            <label for="assignee" class="form-label">Assignee</label>
                            <select class="form-control" id="assignee" name="assignee" required>
                                <option selected disabled>Select Assignee</option>
                                <option value="employee1">Employee 1</option>
                                <option value="employee2">Employee 2</option>
                                <!-- Add more employees -->
                            </select>
                        </div>

                        <!-- Status -->
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-control" id="status" name="status" required>
                                <option selected disabled>Select Status</option>
                                <option value="not_started">Not Started</option>
                                <option value="in_progress">In Progress</option>
                                <option value="completed">Completed</option>
                                <option value="blocked">Blocked</option>
                            </select>
                        </div>

                        <!-- Task Type -->
                        <div class="mb-3">
                            <label for="taskType" class="form-label">Task Type</label>
                            <select class="form-control" id="taskType" name="taskType" required>
                                <option selected disabled>Select Task Type</option>
                                <option value="development">Development</option>
                                <option value="design">Design</option>
                                <option value="upgrade">Upgrade</option>
                                <option value="administrative">Administrative</option>
                            </select>
                        </div>

                        <!-- Estimated Time -->
                        <div class="mb-3">
                            <label for="estimatedTime" class="form-label">Estimated Time (in month's)</label>
                            <select class="form-control" id="estimatedTime" name="estimatedTime" required>
                                <option value="" disabled selected>Select number of month's</option>
                                <option value="1">1 Month</option>
                                <option value="2">2 Months</option>
                                <option value="3">3 Months</option>
                                <option value="4">4 Months</option>
                                <option value="5">5 Months</option>
                                <option value="6">6 Months</option>
                                <option value="7">7 Months</option>
                                <option value="8">8 Months</option>
                                <option value="9">9 Months</option>
                                <option value="10">10 Months</option>
                                <option value="11">11 Months</option>
                                <option value="12">12 Months</option>
                            </select>
                        </div>

                        <!-- Task Creator -->
                        <div class="mb-3">
                            <label for="taskCreator" class="form-label">Task Creator</label>
                            <input type="text" class="form-control" id="taskCreator" name="taskCreator" readonly value="{{--{{ $username }}--}}Current User">
                        </div>

                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="dropdown">Close</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

@endsection
