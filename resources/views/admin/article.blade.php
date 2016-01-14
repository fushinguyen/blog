@extends('layouts.base')

@section('content')
<div class="container-fluid">
    <h3>Article</h3>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>content</th>
                <th>title</th>
            </tr>
        </thead>
        <tbody data-bind="foreach: rows ">
            <tr>
                <td data-bind="html: id "></td>
                <td data-bind="html: title "></td>
                <td data-bind="html: content "></td>
            </tr>
        </tbody>
    </table>
    <span data-bind="html: total() + ' dòng dữ liệu' "></span>
</div>

<script>
    function ViewModel() {
        var self = this;
        self.total = ko.observable(0);
        self.offset = ko.observable(0);
        self.limit = ko.observable(5);
        self.rows = ko.observableArray([]);
        self.fetch = function () {
            $.ajax({url: '{{ url("/article") }}', type: 'post', data: {offset: self.offset(), limit: self.limit()},
                success: function (data) {
                    self.rows(data);
                    self.total(data.length);
                },
                error: function(){

                }
            });
        };
        ko.computed(self.fetch);
    }
    ko.applyBindings(new ViewModel);
</script>





@endsection
