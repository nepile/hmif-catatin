@extends('core.layouts.index')

@section('core-content')
<div class="row mb-5">
    @foreach ($divisions as $d)
    <div class="accordion" id="{{ 'accordionExample'.$d->id }}">
        <div class="accordion-item" style="border-radius: 0;">
            <h2 class="accordion-header" id="{{ 'headingTwo'.$d->id }}">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{'#collapseTwo'.$d->id}}" aria-expanded="false" aria-controls="{{ 'collapseTwo'.$d->id }}">
                    {{ $d->name }}
                </button>
            </h2>
            <div id="{{ 'collapseTwo'.$d->id }}" class="accordion-collapse collapse" aria-labelledby="{{ 'headingTwo'.$d->id }}" data-bs-parent="{{ '#accordionExample'.$d->id }}">
                <div class="accordion-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NIM</th>
                                    <th>Name</th>
                                    <th>Gen</th>
                                    <th>Final Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $committee_ids = [];
                                @endphp
                                @foreach ($points as $p)
                                    @if($d->id == $p->division_id && !in_array($p->committee_id, $committee_ids))
                                    <tr>
                                        <td>{{ $p->committee->nim }}</td>
                                        <td>{{ $p->committee->full_name }}</td>
                                        <td>{{ $p->committee->gen }}</td>
                                        <td>
                                            @php
                                                $total_final_score = 0;
                                            @endphp
                                            @foreach ($points as $point)
                                                @if ($point->committee_id == $p->committee_id)
                                                    @php
                                                        $total_final_score += $point->total_point;
                                                    @endphp
                                                @endif
                                            @endforeach
                                            <span class="text-success">{{ $total_final_score }}</span> /100
                                        </td>
                                    </tr>
                                    @php
                                        $committee_ids[] = $p->committee_id;
                                    @endphp
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
