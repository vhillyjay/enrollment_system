<template>
    <!-- <TopNavBar /> -->
<Head title="Subjects Index" />
<AuthenticatedLayout>
    
<!-- component -->
<div class="bg-white p-8 max-w-7xl mx-auto sm:px-6 lg:px-8">
	<div class=" flex items-center justify-between pb-6">
		<div>
			<h2 class="text-gray-600 font-semibold">SubjectsIndex</h2>
			<span class="text-xs">List of Offered Subjects</span>
		</div>
		<div class="flex items-center justify-between">
			<div class="flex bg-gray-50 items-center p-2 rounded-md">
				<svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20"
					fill="currentColor">
					<path fill-rule="evenodd"
						d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
						clip-rule="evenodd" />
				</svg>
				<input class="bg-gray-50 outline-none ml-1 block " type="text" name="" id="" placeholder="Search">
          </div>
				<div class="lg:ml-40 ml-10 space-x-8">
					<button class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">New Report</button>
					
                    <Link href="/subjects/create"
                        class="bg-indigo-600 px-4 py-2 rounded-md text-white font-semibold tracking-wide cursor-pointer">
                            Create
                    </Link>
				</div>
			</div>
		</div>
		<div>
			<div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
				<div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
					<table class="min-w-full leading-normal">
						<thead>
							<tr>
                                <th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									ID
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Subject Name
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Subject Code
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Classroom
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
									Instructor
								</th>
								<th
									class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                    Actions
								</th>
							</tr>
						</thead>
						<tbody v-for="subjectsData in subjects" :key="subjectsData.id">
							<tr>
                                <td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ subjectsData.id }}</p>
								</td>
								<!-- <td class="px-5 py-5 bg-white text-sm">
									<div class="flex items-center">
										<div class="flex-shrink-0 w-10 h-10">
											<img class="w-full h-full rounded-full"
                                                src="https://images.unsplash.com/photo-1522609925277-66fea332c575?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.2&h=160&w=160&q=80"
                                                alt="" />
                                        </div>
											<div class="ml-3">
												<p class="text-gray-900 whitespace-no-wrap">
													{{ subjectsData.subject_name }}
												</p>
											</div>
										</div>
								</td> -->
                                <td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ subjectsData.subject_name }}</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ subjectsData.subject_code }}</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ subjectsData.classroom }}</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
									<p class="text-gray-900 whitespace-no-wrap">{{ subjectsData.instructor }}</p>
								</td>
								<td class="px-5 py-5 bg-white text-sm">
                                    
                                    <Link :href="`/subjects/${subjectsData.id}/edit`">
                                        <PrimaryButton>Edit</PrimaryButton>
                                    </Link>
									<Link :href="`/subjects/${subjectsData.id}`"
                                        method="DELETE" as="button" type="button">
                                        <PrimaryButton>Delete</PrimaryButton>
                                    </Link>
								</td>
							</tr>
						</tbody>
					</table>
					<!-- <div
						class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          ">
						<span class="text-xs xs:text-sm text-gray-900">
                            Showing 1 to 4 of 50 Entries
                        </span>
						<div class="inline-flex mt-2 xs:mt-0">
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-l">
                                Prev
                            </button>
							&nbsp; &nbsp;
							<button
                                class="text-sm text-indigo-50 transition duration-150 hover:bg-indigo-500 bg-indigo-600 font-semibold py-2 px-4 rounded-r">
                                Next
                            </button>
						</div>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</AuthenticatedLayout>
</template>

<script setup>
    import TopNavBar from '@/Components/TopNavBar.vue';
    import PrimaryButton from '@/Components/PrimaryButton.vue';
    import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
    import { Head, Link } from '@inertiajs/inertia-vue3';
    defineProps(['subjects']);
</script>

