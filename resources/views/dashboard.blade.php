<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="py-0">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="text-red-600">
                        <p class="mb-4">- The data presented within these files is considered highly sensitive and confidential, and its dissemination is strictly forbidden.</p>
                        <p class="mb-4">- Any unauthorized access, disclosure, or use of this information is subject to legal action.</p>
                        <p class="mb-4">- It is imperative to maintain the utmost discretion when handling these documents to uphold the integrity and security of our organization.</p>
                        <p class="mb-4">- Breaching this cnfidentiality may result in severe consequences, including legal penalties and loss of trust.</p>
                        <p class="mb-4">- Safeguarding this data is paramount to protecting the privacy and interests of our stakeholders.</p>
                        <p class="mb-4">- We emphasize the importance of adhering to strict confidentiality protocols to prevent any potential breaches or compromises.</p>
                        <p class="mb-4">- Our commitment to confidentiality underscores our dedication to maintaining trust and security in all our operations.</p>
                        <p class="mb-4">- We urge all parties to handle this information with the highest level of care and responsibility.</p>
                        <p>- Any inquiries or requests for access to this data must be authorized and conducted in accordance with established protocols to ensure confidentiality is upheld.</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

</x-app-layout>
