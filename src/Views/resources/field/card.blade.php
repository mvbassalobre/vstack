<resource-crud-card label="{{ @$label }}" :advanced="{{ json_encode(@$advanced ? true : false) }}">
    <div class="row-responsive-table">
        <table class="table table-striped">
            <tbody>{!! $inputs !!}</tbody>
        </table>
    </div>
</resource-crud-card>
