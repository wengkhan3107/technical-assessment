@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Subscription
                </div>

                <div class="panel-body">
                    <!-- Display Validation Errors -->
                    @include('common.errors')

                    <!-- New Subscription Form -->
                    <form action="{{ url('subscription') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Subscription Name -->
                        <div class="form-group">
                            <label for="subscription-name" class="col-sm-3 control-label">Subscription Name</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="subscription-name" class="form-control" value="{{ old('subscription') }}">
                            </div>
       
                        </div>

                        <!-- Subscription Description -->
                        <div class="form-group">
                            <label for="subscription-description" class="col-sm-3 control-label">description</label>

                            <div class="col-sm-6">
                                <input type="text" name="description" id="subscription-description" class="form-control" value="{{ old('subscription') }}">
                            </div>
                        </div>

                        
                        <!-- Subscription Description -->
                        <div class="form-group">
                            <label for="subscription-price" class="col-sm-3 control-label">Price</label>

                            <div class="col-sm-6">
                                <input type="text" name="price" id="subscription-price" class="form-control" value="23" readonly>
                            </div>
                        </div>

                        <!-- Add Subscription Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Subscription
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Subscriptions -->
            @if (count($subscriptions) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Subscriptions
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped subscription-table">
                            <thead>
                                <th>Subscription</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($subscriptions as $subscription)
                                    <tr>
                                        <td class="table-text"><div>{{ $subscription->name }}</div></td>

                                        <!-- Subscription Delete Button -->
                                        <td>
                                            <form action="{{url('subscription/' . $subscription->id)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}

                                                <button type="submit" id="delete-subscription-{{ $subscription->id }}" class="btn btn-danger">
                                                    <i class="fa fa-btn fa-trash"></i>Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
