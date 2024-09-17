import clsx from 'clsx';

function getStatusClass(status: string) {
  switch (status) {
    case 'pending':
      return 'bg-gray-100 text-gray-500';
    case 'paid':
      return 'bg-green-500 text-white';
    default:
      return '';
  }
}

export default function InvoiceStatus({ status }: { status: string }) {
  return (
    <span
      className={clsx(
        'inline-flex items-center rounded-full px-2 py-1 text-sm',   

        getStatusClass(status)
      )}
    >
      // ...
    </span>
  );
}