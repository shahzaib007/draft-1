<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Resources\ContactCollection;
use App\Http\Resources\ContactResource;
 
class ContactAPIController extends Controller
{
    public function index()
    {
        return new ContactCollection(Contact::paginate());
    }
 
    public function show(Contact $contact)
    {
        return new ContactResource($contact->load(['user']));
    }

    public function store(Request $request)
    {
        return new ContactResource(Contact::create($request->all()));
    }

    public function update(Request $request, Contact $contact)
    {
        $contact->update($request->all());

        return new ContactResource($contact);
    }

    public function destroy(Request $request, Contact $contact)
    {
        $contact->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}