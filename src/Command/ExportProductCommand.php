<?php

namespace App\Command;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use function PHPUnit\Framework\stringContains;

#[AsCommand(
    name: 'app:exportProduct',
    description: 'Export all product in a CSV file',
    hidden: false
)]
class ExportProductCommand extends Command {
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        parent::__construct();
        $this->em = $em;
    }

    protected function configure(): void{
        $this->setHelp('Commande qui permet d\'exporter tous les produits de la Base de Données dans un fichier CSV');
        $this->addArgument('file', InputArgument::REQUIRED, 'File to export');
    }

    protected function execute(InputInterface $input, OutputInterface $output){
        //Récupere le nom du fichier
        $fileName = $input->getArgument('file');
        //Si le fichier ne contien pas .csv
        if(!str_ends_with($fileName, '.csv')){
            $output->writeln("Le fichier passer en paramètre n'est pas un fichier CSV");
            return Command::INVALID;
        }

        $output->writeln('Command to test');
        $output->writeln('================');
        $output->writeln('File to export: ' . $fileName);


        //Recupére tous les produits
        $results = $this->em->getRepository(Product::class)->findAll();
        //Ouvre le fichier passer en parametre
        $fp = fopen($fileName, "w");

        //Ecrit un header dans le fichier
        fputcsv(
            $fp,
            array('Identifiant', 'Nom', 'Description', 'Prix'),
            ','
        );

        //Pour tous les produits
        foreach ($results as $item) {
            //Ecrit dans le fichier
            fputcsv(
                $fp,
                array($item->getId(), $item->getName(), $item->getDescription(), $item->getPrice().'€'),
                ','
            );
        }

        //Ferme le fichier
        fclose($fp);


        //Retourne la command à était réalisé
        return Command::SUCCESS;
    }

}