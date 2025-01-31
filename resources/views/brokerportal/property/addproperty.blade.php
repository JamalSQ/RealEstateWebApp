@extends('brokerportal.app')
@section('page_title','Add Property')
@section('page_main_heading','Add your Property Listing')
@section('addproperty_selected','active')
@section('container')
<div class="content-wrapper">
    <div class="container mt-2">
        <div class="step-indicator">
            <div class="step-indicator-item step1 active" data-step="1">Property Type</div>
            <div class="step-indicator-item step2" data-step="2">Property Details</div>
            <div class="step-indicator-item step3" data-step="3">Location Details</div>
            <div class="step-indicator-item step4" data-step="4">Pricing and Financial Information</div>
            <div class="step-indicator-item step5" data-step="5">Property Features and Amenities</div>
            <div class="step-indicator-item step6" data-step="6">Media and Visual Content</div>
            <div class="step-indicator-item step7" data-step="7">Property Documents</div>
            <div class="step-indicator-item step8" data-step="8">Contact Information</div>
            <div class="step-indicator-item step9" data-step="9">Additional Questions</div>
            <div class="step-indicator-item step10" data-step="10">Legal and Compliance</div>
        </div>

        <form id="propertyForm">
            <div class="step active" id="step1">
                <h3>Choose Property Type</h3>
                <div class="mb-3">
                    <label for="propertyType" class="form-label">Select Property Type</label>
                    <select class="form-select" id="propertyType" required>
                        <option value="">Select Property Type</option>
                        <option value="house">House</option>
                        <option value="apartment">Apartment/Flat</option>
                        <option value="commercial">Commercial Property</option>
                        <option value="land">Land</option>
                        <option value="villa">Villa</option>
                    </select>
                </div>
                <button type="button" class="btn btn-primary nextBtn" data-step="1">
                    Next
                </button>
            </div>
            <div class="step" id="step2">
                <h3>Enter Property Details</h3>
                <div class="mb-3">
                    <label for="propertyDescription" class="form-label">Property Description</label>
                    <textarea
                        class="form-control"
                        id="propertyDescription"
                        rows="3"
                        required></textarea>
                </div>
                <div class="mb-3">
                    <label for="propertySize" class="form-label">Property Size (sq ft)</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertySize"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="2">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="2">
                    Next
                </button>
            </div>
            <div class="step" id="step3">
                <h3>Location Details</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="3">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="3">
                    Next
                </button>
            </div>
            <div class="step" id="step4">
                <h3>Pricing and Financial Information</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="4">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="4">
                    Next
                </button>
            </div>
            <div class="step" id="step5">
                <h3>Property Features and Amenities</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="5">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="5">
                    Next
                </button>
            </div>
            <div class="step" id="step6">
                <h3>Media and Visual Content</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="6">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="6">
                    Next
                </button>
            </div>
            <div class="step" id="step7">
                <h3>Property Documents</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="7">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="7">
                    Next
                </button>
            </div>
            <div class="step" id="step8">
                <h3>Contact Information</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="8">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="8">
                    Next
                </button>
            </div>
            <div class="step" id="step9">
                <h3>Additional Questions</h3>
                <div class="mb-3">
                    <label for="propertyPrice" class="form-label">Asking Price</label>
                    <input
                        type="number"
                        class="form-control"
                        id="propertyPrice"
                        required />
                </div>
                <button type="button" class="btn btn-secondary prevBtn" data-step="9">
                    Previous
                </button>
                <button type="button" class="btn btn-primary nextBtn" data-step="9">
                    Next
                </button>
            </div>
            <div class="step" id="step10">
                <h3>Legal and Compliance</h3>
                <p>Review your property listing and submit.</p>
                <button type="button" class="btn btn-secondary prevBtn" data-step="10">
                    Previous
                </button>
                <button type="submit" class="btn btn-success">Submit Listing</button>
            </div>
        </form>
    </div>
</div>
@endsection