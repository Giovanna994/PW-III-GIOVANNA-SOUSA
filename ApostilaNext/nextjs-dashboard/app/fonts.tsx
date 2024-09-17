import { Inter } from 'next/font/google';
import { inter as interFont } from '@/app/fonts';

export const inter = Inter({ subsets: ['latin'] });

export default function RootLayout({
  children,
}: {
  children: React.ReactNode;
}) {
  return (
    <html lang="en">   

      <body className={`${inter.className} antialiased`}>{children}</body>   

    </html>
  );
}