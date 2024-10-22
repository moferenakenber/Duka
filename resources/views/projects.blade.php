@extends('layouts.user_type.auth')

@section('content')

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <h2>Projects</h2>
            </div>
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownFormButton" data-bs-toggle="dropdown" aria-expanded="false">
                Add Project
            </button>
            <ul class="dropdown-menu p-4" aria-labelledby="dropdownFormButton">
                <li>
                    <form>
                        @csrf

                        <!-- Project Name -->
                        <div class="mb-3">
                            <label for="Task Name" class="form-label">Project Name</label>
                            <input type="text" class="form-control" id="taskName" name="taskName" placeholder="Enter project name" required>
                        </div>

                        <!-- Project Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Project Description</label>
                            <textarea rows="5" cols="30" class="form-control" id="description" name="description" placeholder="Enter project description" required></textarea>
                        </div>

                        <!-- Task Included in Project -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Tasks Included in Project</label>
                            <br>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Admin" id="Admin">
                                <label class="form-check-label" for="flexCheckDefault">Task A</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Employee" id="Employee" checked>
                                <label class="form-check-label" for="flexCheckChecked">Task B</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="purchaser" id="purchaser">
                                <label class="form-check-label" for="flexCheckDefault">Task C</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Employee" id="marketing">
                                <label class="form-check-label" for="flexCheckChecked">Task D</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="sales" id="marketing">
                                <label class="form-check-label" for="flexCheckChecked">Task E</label>
                            </div>
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

                        <!-- Assignee Included in Project -->
                        <div class="mb-3">
                            <label for="role" class="form-label">Assignee Included in Project</label>
                            <br>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Admin" id="Admin">
                                <label class="form-check-label" for="flexCheckDefault">Employee A</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Employee" id="employee" checked>
                                <label class="form-check-label" for="flexCheckChecked">Employee B</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="purchaser" id="purchaser">
                                <label class="form-check-label" for="flexCheckDefault">Employee C</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="Employee" id="marketing">
                                <label class="form-check-label" for="flexCheckChecked">Employee D</label>
                            </div>
                            <div class="form-check form-check-inline mb-3">
                                <input class="form-check-input" type="checkbox" value="sales" id="marketing">
                                <label class="form-check-label" for="flexCheckChecked">Employee E</label>
                            </div>
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
                            <label for="taskType" class="form-label">Project Type</label>
                            <select class="form-control" id="projectType" name="projectType" required>
                                <option selected disabled>Select Project Type</option>
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
                            <label for="taskCreator" class="form-label">Project Creator</label>
                            <input type="text" class="form-control" id="projectCreator" name="projectCreator" readonly value="{{--{{ $username }}--}}Current User">
                        </div>

                        <button type="submit" class="btn btn-success">Create</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="dropdown">Close</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>

@endsection
