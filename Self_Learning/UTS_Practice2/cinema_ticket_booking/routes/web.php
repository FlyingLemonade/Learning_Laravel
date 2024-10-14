<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/movies');
});

Route::get('/movies', [MovieController::class, 'show'])->name('movie');
Route::get('/movies/tickets/{movie:id}', [MovieController::class, 'showTicket'])->name('movie.ticket');;
Route::get('/movies/book/{movie:id}', [MovieController::class, 'toForm'])->name('movie.book');
Route::post('/ticket/submit', [TicketController::class, 'submitTicket'])->name('ticket.submit');
Route::put('/ticket/checkin/{ticket:id}', [TicketController::class, 'checkIn']);
Route::delete('/ticket/delete/{ticket:id}', [TicketController::class, 'delete'])->name('ticket.delete');
Route::get('/member', [MemberController::class, 'showMember'])->name('member');
Route::get('/member/tickets/{member:id}', [MemberController::class, 'showTickets'])->name('member.tickets');
Route::get('/member/manage', [MemberController::class, 'showManage'])->name('member.manage');
Route::post('/member/submit', [MemberController::class, 'submitMember'])->name('member.submit');
