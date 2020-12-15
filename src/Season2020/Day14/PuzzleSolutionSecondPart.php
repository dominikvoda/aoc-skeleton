<?php declare(strict_types = 1);

namespace AdventOfCode\Season2020\Day14;

use AdventOfCode\IntegerResult;
use AdventOfCode\LinesInput;
use AdventOfCode\PuzzleSolution;
use AdventOfCode\Result;
use LogicException;

final class PuzzleSolutionSecondPart implements PuzzleSolution
{
    public function getResult(): Result
    {
        $input = new LinesInput(__DIR__ . '/input.txt');

        $decoder = new DecoderV2();
        $computer = new Computer($decoder);

        foreach ($input->getLines() as $line) {
            $computer->run($line);
        }

        return IntegerResult::fromArraySum($decoder->getMemory());
    }
}
