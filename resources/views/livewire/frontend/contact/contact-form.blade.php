<div>
    <p class="mb-4">
        The contact form is currently inactive. Get a functional and working contact form with
        Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done.
        <a href="https://htmlcodex.com/contact-form">Download Now</a>.
    </p>

    <form wire:submit.prevent="submit">
        <div class="row g-3">
            <div class="col-md-6">
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.defer="name" id="name" placeholder="Your Name"  />
                    @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <label for="name">Your Name <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model.defer="email" id="email" placeholder="Your Email"  />
                    @error('email')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <label for="email">Your Email <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" wire:model.defer="phone" id="phone" placeholder="Phone">
                    @error('phone')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <label for="phone">Your Phone</label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <input type="text" class="form-control @error('subject') is-invalid @enderror" wire:model.defer="subject" id="subject" placeholder="Subject"  />
                    @error('subject')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <label for="subject">Subject <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-12">
                <div class="form-floating">
                    <textarea class="form-control @error('message') is-invalid @enderror" placeholder="Leave a message here" wire:model.defer="message" id="message"  style="height: 100px;"></textarea>
                    @error('message')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <label for="message">Message <span class="text-danger">*</span></label>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
            </div>
        </div>
    </form>
</div>
