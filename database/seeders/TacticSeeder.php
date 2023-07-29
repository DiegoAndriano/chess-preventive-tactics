<?php

namespace Database\Seeders;

use App\Models\Tactic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TacticSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tactic::create(
            [
                'pgn' => '1. e4 Nc6 2. d4 d5 3. exd5 Qxd5 4. Nf3 Nf6 5. Nc3 Qd8 6. d5 Nb4 7. Bc4 Bg4 8. h3 Bxf3',
                'option_one' => 'gxf3',
                'option_two' => 'Qf3',
                'answer' => 'Qf3',
                'description' => "This tactic puzzle was extracted from Aman's chess habits. Link for further explanation of this particular tactic: https://youtu.be/qK0Ds5vLAjE?t=71"
            ]
        );
        Tactic::create([
            'pgn' => "1. d4 d5 2. Bf4 { D00 Queen's Pawn Game: Accelerated London System } Nc6 3. e3 Nf6 4. Nf3 Bg4 5. h3 Bh5 6. Nbd2 e6 7. Bb5 Ne4? { (0.17 → 1.48) Mistake. Bd6 was best. } (7... Bd6 8. g4 Bg6 9. Ne5 Bxe5 10. Bxe5 O-O 11. Bg3 Nb4 12. Ba4) 8. g4 Bg6 9. Ne5 a6 10. Bxc6+ bxc6 11. Nxc6 Qd7 12. Ne5 Bd6?? { (1.95 → 7.94) Blunder. Qa4 was best. } (12... Qa4 13. c3 Qxd1+ 14. Rxd1 Rb8 15. Nxe4 Bxe4 16. f3 f6 17. fxe4 fxe5 18. Bxe5 Rxb2 19. Rh2) 13. Nxd7 Bxf4 14. exf4 Kxd7 15. Nxe4 Bxe4 16. c3? { (8.01 → 4.45) Mistake. f3 was best. } (16. f3 Bg6) 16... Bxh1 17. f5 exf5 18. gxf5 Be4 19. Qg4 f6?! { (3.87 → 5.33) Inaccuracy. g6 was best. } (19... g6 20. fxg6+ f5 21. Qg5 hxg6 22. h4 f4 23. O-O-O Kc6 24. Re1 Kb7 25. Qe7 Rae8 26. Qb4+) 20. Kd2 Rhg8?! { (4.48 → 5.73) Inaccuracy. g6 was best. } (20... g6) 21. f3 Rae8 22. fxe4 Rxe4 23. Qf3 Rge8 24. Kd3 Rb8 25. b3 a5 26. Qh1 c6 27. Re1 Rf4 28. Rf1 Rh4 29. c4 Rb4 30. cxd5 Rbxd4+ 31. Kc3 Rxd5 32. Rf3?! { (7.06 → 5.21) Inaccuracy. Qg2 was best. } (32. Qg2 Kc8 33. Re1 Rhd4 34. Re8+ Kd7 35. Ra8 Rd3+ 36. Kc2 g6 37. fxg6 Rd2+ 38. Qxd2 Rxd2+) 32... Rc5+ 33. Kb2 Rd4 34. Rg3 Rd2+ 35. Ka3 Rcc2 36. Rxg7+ Kd6 37. Qa1 h5? { (7.26 → Mate in 12) Checkmate is now unavoidable. Kc5 was best. } (37... Kc5 38. Rxh7) 38. Qxf6+ Kc5 39. Qa1?! { (Mate in 10 → 10.75) Lost forced checkmate sequence. Qe5+ was best. } (39. Qe5+ Rd5 40. Qe3+ Rd4 41. f6 Re2 42. Qxe2 Rd6 43. Qe3+ Rd4 44. f7 Kb6 45. f8=Q Ka6) 39... Rh2?! { (10.75 → Mate in 5) Checkmate is now unavoidable. Rb2 was best. } (39... Rb2 40. f6) 40. Ra7? { (Mate in 5 → 9.40) Lost forced checkmate sequence. Qe5+ was best. } (40. Qe5+ Kb6 41. Qd4+ Rc5 42. Qd8+ Ka6 43. Qa8+ Kb5 44. Rb7#) 40... Kb6 41. Qg1+?? { (9.39 → 0.11) Blunder. Rd7 was best. } (41. Rd7) 41... Rcf2?? { (0.11 → 8.97) Blunder. Rhf2 was best. } (41... Rhf2 42. Qxf2+ Rxf2 43. Rf7 Rf3 44. Rf8 Rxh3 45. f6 Rf3 46. f7 Kb7 47. Ka4 Rf5 48. Rh8) 42. Rxa5?? { (8.97 → 0.00) Blunder. Rg7 was best. } (42. Rg7) 42... Kxa5 ",
            'option_one' => 'Qe1+',
            'option_two' => 'Qa1',
            'option_three' => 'b4+',
            'answer' => 'b4+',
            'description' => "From https://lichess.org/es/training/NL4fP"
        ]);
    }
}
