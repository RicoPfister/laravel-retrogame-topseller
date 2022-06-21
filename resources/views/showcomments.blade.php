{{-- author: rico --}}

{{-- show default message if no comments were found --}}
@if (count($comments)>0)

    <div class='list'>
        <div class="w-100">
            @foreach ($comments as $comment)
                <table>
                    {{-- loops through the $collection, that this blade template
                        gets from CollectionController.php. for each element of the loop which
                        we call $message we print the properties (nickname, comment
                        and created_at in an <li> element  --}}
                        <thead>
                            <tr>
                                <th>{{$comment->Nickname}}</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>
                                <div class="d-flex justify-content-left">
                                    @if ($comment->Rating>0)
                                        @include('ratingUser')<br>
                                    @endif
                                </div>
                                {{$comment->Comment}}<br>
                                {{$comment->updated_at->diffForHumans()}}
                            </td>
                        </tr>
                </table><hr>
            @endforeach
        </div>
    </div>

@else
    <h3 class="text-center m-0 p-0">No comments</h3><br>
    <div class="text-center m-0 p-0">Be the first to comment and rate the game!</div>
@endif

