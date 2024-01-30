// import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
// import { Link, Head, button } from '@inertiajs/react';

// import axios from 'axios'

// export default function Fetchcompanyprofile(props) {
//     const [data, setData] = useState([])
//     useEffect(()=> {
//         axios.get('https://jsonplaceholder.typicode.com/users')
//         .then(res => setData(res.data))
//         .catch(err => console.log(err));
//     },[])

//     return (

        
//         // <AuthenticatedLayout
//         //     auth={props.auth}
//         //     errors={props.errors}
//         //     header={<h2 className="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Welcome to Financial Modeling - 
//         //     Test Exam for TEEMCORP INC.</h2>}
//         // >
//         //     <Head title="Dashboard" />

//         //     <div className="py-12">
//         //         <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
//         //             <div className="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
//         //                 <div className="text-sm text-right p-4 text-gray-500 dark:text-gray-500">Date: <Date></Date> </div>
//         //                 <div className="p-6 text-gray-900 dark:text-gray-100">Welcome back: {props.auth.user.name}<hr></hr></div>
//         //                  <div className="pt-3 pb-6 flex justify-center mb-10">
//         //                     <Link href="#">
//         //                         <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 
//         //                         hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 
//         //                         border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest 
//         //                         hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 
//         //                         dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 
//         //                         dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 false ml-4">Get Company Profile</button>
//         //                     </Link>
//         //                     <Link href="#">
//         //                         <button class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-cyan-500 to-blue-500 
//         //                         hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 
//         //                         border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase 
//         //                         tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white 
//         //                         active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 
//         //                         focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 
//         //                         false ml-4">Get Company Quote</button>
//         //                     </Link>
//         //                 </div>
//         //             </div>
//         //         </div>
//         //     </div>
//         // </AuthenticatedLayout>
//     );
// }
