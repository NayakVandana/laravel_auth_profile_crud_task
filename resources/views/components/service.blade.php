<div  id="{{ $id }}" class="flex {{ $reverse ? 'flex-col-reverse md:flex-row' : 'flex-col md:flex-row' }} items-center md:space-x-10 container mx-auto py-5 md:py-0 sm:pb-10 sm:max-w-7xl xl:max-w-[1320px] sm:px-10 p-3">
    @if($reverse)
        <div class="w-full"><img src="{{ $image }}" alt="Icon" /></div>
    @endif
    <div class="w-full {{ $reverse ? 'md:px-10' : 'pr-10' }}">
        <h2 class="font-bebas text-4xl sm:text-5xl text-[#008DD2] font-normal" >{{ $title }}</h2>
        <p class="text-base font-normal leading-7  text-[#494F62] py-6">{{ $description }}</p>
    </div>
    @if(!$reverse)
        <div class="w-full"><img src="{{ $image }}" alt="Icon" /></div>
    @endif
</div>
