import AcmeLogo from '@/app/page';
import Link from 'next/link';
import styles from '@/app/ui/home.module.css';
import Image from 'next/image';
 
// ...
 
export default function Page() {
  return (
    <main className="flex min-h-screen flex-col p-6">
      <div className="flex h-20 shrink-0 items-end rounded-lg bg-blue-500 p-4 md:h-52">
        <AcmeLogo />
        {/* ... */}
        <Image
        src="/hero-desktop.png"
        width={1000}
        height={760}
        className="hidden md:block"
        alt="Screenshots of the dashboard project showing desktop version"
      />
      </div>
    </main>
  );
}
