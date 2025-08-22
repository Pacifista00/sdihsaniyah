<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Pendaftar;

class PendaftaranMail extends Mailable
{
    use Queueable, SerializesModels;

    public $pendaftar;

    public function __construct(Pendaftar $pendaftar)
    {
        $this->pendaftar = $pendaftar;
    }

    public function build()
    {
        // Generate PDF
        $pdf = Pdf::loadView('pdf.pendaftaran', ['pendaftar' => $this->pendaftar]);

        return $this->subject('Pendaftaran Berhasil')
            ->markdown('emails.pendaftaran') // email view biasa
            ->attachData($pdf->output(), 'formulir_pendaftaran.pdf', [
                'mime' => 'application/pdf',
            ]);
    }
}
