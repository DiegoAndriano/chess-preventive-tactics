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
                'easy' => 1000,
                'description' => "This tactic puzzle was extracted from Aman's chess habits. Link for further explanation of this particular tactic: https://youtu.be/qK0Ds5vLAjE?t=71"
            ]);

        Tactic::create(
            [
                'pgn' => '1. e4 Nf6 2. e5 Nd5 3. d4 { B03 Alekhine Defense } e6 4. Nf3 c6 5. Bc4 Qa5+ 6. Bd2 Qb6 7. Nc3 Nxc3 8. Bxc3 d5 9. Bd3 Bb4 10. Qd2 Bxc3 11. Qxc3 O-O 12. O-O Nd7 13. b3 a5 14. a4 Qd8 15. Rfe1 f6 16. Rac1 fxe5 17. Nxe5 Nxe5 18. Rxe5 Qh4 19. Qd2 Rb8 20. c4',
                'option_one' => 'Qf4',
                'option_two' => 'Qxd4',
                'option_three' => 'Kh8',
                'answer' => 'Qxd4',
                'description' => ""
            ]);

        Tactic::create(
            [
                'pgn' => '1. e4 Nf6 2. e5 Nd5 3. d4 { B03 Alekhine Defense } e6 4. Nf3 c6 5. Bc4 Qa5+ 6. Bd2 Qb6 7. Nc3 Nxc3 8. Bxc3 d5 9. Bd3 Bb4 10. Qd2 Bxc3 11. Qxc3 ',
                'option_one' => 'O-O',
                'option_two' => 'Nd7',
                'option_three' => 'g6',
                'answer' => 'O-O',
                'description' => ""
            ]);

        Tactic::create([
            'pgn' => "1. d4 Nf6 2. f4?! { (0.22 → -0.45) Inaccuracy. c4 was best. } { A45 Canard Opening } (2. c4 e6 3. g3 Bb4+ 4. Bd2 Be7 5. Nf3 d5 6. Bg2 Nbd7) 2... e6 3. Nf3 d5 4. e3 c5 5. c3 Nc6 6. Be2 Bd6 7. O-O Bd7?! { (-0.68 → -0.08) Inaccuracy. O-O was best. } (7... O-O 8. Ne5 Ne7 9. g4 b6 10. Nd2 Bb7 11. b3 Qc7 12. Bb2) 8. Ne5 Ne4 9. Bh5?! { (0.35 → -0.27) Inaccuracy. Nd2 was best. } (9. Nd2 Nxd2 10. Bxd2 O-O 11. a4 Be8 12. b3 cxd4 13. cxd4 f6 14. Nxc6 Bxc6 15. Rc1 a5) 9... O-O 10. Nxd7 Qxd7 11. Nd2 f5 12. Rf3?! { (-0.47 → -1.24) Inaccuracy. Nxe4 was best. } (12. Nxe4) 12... cxd4 13. exd4? { (-1.26 → -2.81) Mistake. cxd4 was best. } (13. cxd4 g6 14. Nxe4 dxe4 15. Rg3 Ne7 16. Be2 Nd5 17. h4 Kh8 18. Bd2 Rg8 19. Bc4 h5) 13... g6 14. Nxe4 dxe4? { (-3.30 → -1.36) Mistake. fxe4 was best. } (14... fxe4 15. Rg3 Rf6 16. Rg5 Kh8 17. Be2 Bxf4 18. Bxf4 Rxf4 19. g3 Rf6 20. Qd2 Raf8 21. Rf1) 15. Rg3 Qc7 16. Bxg6?! { (-0.89 → -1.67) Inaccuracy. Qf1 was best. } (16. Qf1 Ne7 17. Bd1 Rad8 18. Bb3 Rf6 19. c4 Nc6 20. Be3 Be7 21. d5 Na5 22. Bd4 Bc5) 16... hxg6 17. Rxg6+ Kf7 18. Qh5",
            'option_one' => 'Ke8',
            'option_three' => 'Qb6',
            'option_two' => 'Ke7',
            'answer' => 'Ke7',
            'description' => "From https://lichess.org/es/training/uD9GL"
        ]);

        Tactic::create([
            'pgn' => "1. e4 e5 2. Nf3 Nf6 3. Nc3 d5 4. exd5 Nxd5 5. Bc4 Nxc3 6. bxc3",
            'option_one' => 'Bg4',
            'option_two' => 'Nc6',
            'option_three' => 'Bd6',
            'answer' => 'Bg4',
            'description' => "From game 3 of Aman's https://www.youtube.com/watch?v=qK0Ds5vLAjE&list=PL8N8j2e7RpPnpqbISqi1SJ9_wrnNU3rEm&index=20"
        ]);


        Tactic::create([
            'pgn' => "1. e4 c5 2. Nf3 Nc6 3. c3 d6 4. d4 cxd4 5. cxd4 e6 6. d5 exd5 7. exd5 Qa5+ 8. Nc3 Nb4 9. Bb5+ Bd7 10. Bxd7+ Kxd7 11. O-O Rc8 12. Bf4 Nf6 13. Re1 Be7 14. Qe2 Rhe8 15. Rac1 Nbxd5 16. Nxd5 Nxd5 17. Bg3 Rxc1 18. Rxc1",
            'option_one' => 'Bh4',
            'option_two' => 'Qa2',
            'option_three' => 'Nc7',
            'answer' => 'Qa2',
            'description' => "From game 4 of Aman's https://www.youtube.com/watch?v=qK0Ds5vLAjE&list=PL8N8j2e7RpPnpqbISqi1SJ9_wrnNU3rEm&index=21 . Even though this move doesn't allow a tactic per se, it loses the game completely, whichever move you make with the king after."
        ]);

        Tactic::create([
            'pgn' => "1. d4 Nf6 { A45 Indian Defense } 2. Bf4 d5 3. e3 Bf5 4. c3 e6 5. Bd3 Bg6 6. Nf3 c5 7. h3 cxd4 8. exd4 Qb6 9. Qa4+ Nc6",
            'option_one' => 'Qb5',
            'option_two' => 'Bg6',
            'option_three' => 'Ne5',
            'answer' => 'Qb5',
            'description' => "From https://lichess.org/es/training/kBbRI"
        ]);


        Tactic::create([
            'pgn' => "1. e4 d5 2. exd5 Qxd5 3. Nc3 Qd6 4. d4 c6 { B01 Scandinavian Defense: Schiller-Pytel Variation } 5. Bd3?! { (0.62 → -0.13) Inaccuracy. Nf3 was best. } (5. Nf3 Nf6 6. Be2 e6 7. O-O Be7 8. Bg5 Nbd7 9. Qd2 Qc7 10. Bf4 Qd8 11. Bd3 O-O) 5... Nf6?! { (-0.13 → 0.77) Inaccuracy. Qxd4 was best. } (5... Qxd4) 6. Nge2 Bg4 7. f3 Bh5 8. Bf4 Qd8 9. O-O e6 10. Re1 Bd6 11. Qd2 Bg6 12. Rad1 Bxd3 13. Qxd3 Bxf4 14. Nxf4 Qd6 15. Nce2 Nbd7 16. c4 O-O 17. Qe3 Rfe8 18. Nc3 Qb4 19. Qe2 Nb6 20. c5 Na4 21. Nxa4 Qxa4 22. a3 Rad8 23. Qe3 Nd5 24. Nxd5 Rxd5 25. Qc3 Red8 26. b3 Qa6 27. b4 h6 28. f4 R8d7 29. a4",
            'option_one' => 'Rf5',
            'option_two' => 'Qxa4',
            'option_three' => 'h5',
            'answer' => 'Qxa4',
            'description' => "From https://lichess.org/es/training/BBewv"
        ]);


        Tactic::create([
            'pgn' => "1. e4 d5 2. exd5 Nf6 { B01 Scandinavian Defense: Modern Variation } 3. Nf3 Nxd5 4. Bc4 c5 5. c3 Nc6 6. Qb3?! { (0.51 → -0.40) Inaccuracy. O-O was best. } (6. O-O Nb6 7. Bb5 e6 8. Bxc6+ bxc6 9. d3 Be7 10. c4 O-O) 6... e6 7. O-O Na5 8. Qa4+ Bd7 9. Bb5 Bxb5? { (-0.47 → 1.04) Mistake. Nc6 was best. } (9... Nc6 10. d4 a6 11. Bxc6 Bxc6 12. Qc2 b5 13. Re1 Nf6 14. Nbd2 Bb7 15. a4 h6 16. dxc5) 10. Qxb5+ Nc6 11. d4? { (0.92 → -0.52) Mistake. Qxb7 was best. } (11. Qxb7 Rc8 12. Na3 Be7 13. d3 O-O 14. Nc4 Nb6 15. Nfe5 Rc7 16. Qa6 Nxe5 17. Nxe5 Qc8) 11... a6",
            'option_one' => 'Qc4',
            'option_two' => 'Qb3',
            'option_three' => 'Qxb7',
            'answer' => 'Qxb7',
            'description' => "From https://lichess.org/es/training/Ba29C"
        ]);

        Tactic::create([
            'pgn' => "1. d4 d5 2. Nc3 Nf6 { A45 Queen's Pawn Game: Chigorin Variation } 3. Nf3 Nc6 4. e3 Bf5 5. Bd3 Bg6 6. Bxg6?! { (0.36 → -0.36) Inaccuracy. Bb5 was best. } (6. Bb5 Qd6 7. Bxc6+ bxc6 8. O-O e6 9. b3 Bh5 10. Bb2 Qd8) 6... hxg6 7. h3 e6 8. Bd2 Bd6 9. Qe2 Nb4 10. O-O-O a6?! { (0.35 → 0.96) Inaccuracy. Be7 was best. } (10... Be7 11. g4 Nc6 12. Kb1 a6 13. Bc1 Bb4 14. g5 Ne4 15. Nxe4 dxe4 16. Ne5 Nxe5 17. dxe5) 11. Kb1 Qe7?! { (0.59 → 1.66) Inaccuracy. Be7 was best. } (11... Be7 12. g4 Nc6 13. Bc1 Qd6 14. e4 Nxe4 15. Nxe4 dxe4 16. Qxe4 O-O-O 17. Qe2 Qb4 18. c3) 12. Na4? { (1.66 → 0.00) Mistake. a3 was best. } (12. a3) 12... Nc6 13. a3? { (0.16 → -1.11) Mistake. c4 was best. } (13. c4 dxc4) 13... O-O-O? { (-1.11 → 0.22) Mistake. b5 was best. } (13... b5 14. Nc3) 14. Nc5?? { (0.22 → -1.88) Blunder. c4 was best. } (14. c4 dxc4) 14... Bxc5 15. dxc5 Qxc5 16. Bb4?? { (-1.95 → -4.55) Blunder. Bc3 was best. } (16. Bc3 Rde8) 16... Nxb4 17. axb4 Qxb4 18. c3 Qe7 19. Rd4 e5 20. Rb4 e4 21. Nd4 c5 22. Nc6",
            'option_one' => 'Qc7',
            'option_two' => 'Qe8',
            'option_three' => 'bxc6',
            'answer' => 'bxc6',
            'description' => "From https://lichess.org/es/training/iI4xH"
        ]);

        Tactic::create([
            'pgn' => "1. e4 e5 2. Nf3 Nf6 3. Nc3 d5 4. exd5 Nxd5 5. Bc4 Nxc3 6. bxc3 Bg4 7. Bxf7+ Kxf7 8. Nxe5+ Kg8 9. Qxg4",
            'option_one' => 'Qd5',
            'option_two' => 'h6',
            'option_three' => 'Qe8',
            'answer' => 'Qe8',
            'description' => "From game 3 of Aman's https://www.youtube.com/watch?v=qK0Ds5vLAjE&list=PL8N8j2e7RpPnpqbISqi1SJ9_wrnNU3rEm&index=20 ."
        ]);

        Tactic::create([
            'pgn' => "1. d4 e6 2. Nc3 d5 3. e4 Nf6 4. Bg5 dxe4 5. Nxe4 Be7 6. Bxf6 gxf6 { C11 French Defense: Classical Variation, Burn Variation, Morozevich Line } 7. c3 f5 8. Ng3 b6?! { (-0.05 → 0.91) Inaccuracy. c5 was best. } (8... c5 9. dxc5 Qxd1+ 10. Rxd1 Bxc5 11. Nf3 Nc6 12. Bb5 Bd7 13. Ng5 Rd8 14. Bxc6 bxc6 15. O-O) 9. Bb5+?! { (0.91 → 0.34) Inaccuracy. Bc4 was best. } (9. Bc4 Nd7) 9... c6 10. Bd3 Bb7 11. Nf3 Nd7 12. Qe2 a6?! { (0.27 → 0.90) Inaccuracy. O-O was best. } (12... O-O 13. O-O-O) 13. O-O-O Qc7 14. Bxf5?? { (1.48 → -0.61) Blunder. Rhe1 was best. } (14. Rhe1 Nf8 15. Nh5 Ng6 16. Ng7+ Kf8 17. Nh5 c5 18. g3 h6 19. Kb1 b5 20. dxc5 Bxc5) 14... exf5 15. Nxf5?? { (-0.25 → -2.48) Blunder. Kb1 was best. } (15. Kb1 Nf8) 15... Qf4+ 16. Ne3 O-O-O 17. g3 Qh6 18. Kb1 Rhe8 19. Ka1 Qe6 20. Qd3 Qg6 21. Qc4 Kb8 22. Rhe1 Bd6?! { (-3.38 → -2.29) Inaccuracy. b5 was best. } (22... b5 23. Qe2 c5 24. dxc5 Bxc5 25. Nd4 Bb6 26. f4 Nf6 27. Qf2 Ne4 28. Qc2 Nd6 29. Qf2) 23. a4?! { (-2.29 → -3.24) Inaccuracy. Nh4 was best. } (23. Nh4 Qe6) 23... Bc7 24. Nh4 Qe6 25. Qd3?! { (-3.11 → -4.00) Inaccuracy. Nhf5 was best. } (25. Nhf5) 25... Qe4?! { (-4.00 → -2.74) Inaccuracy. Nc5 was best. } (25... Nc5 26. Qc4 Qxc4 27. Nxc4 Nxa4 28. Rxe8 Rxe8 29. Ne3 b5 30. Nhf5 Nb6 31. Ng7 Rd8 32. Ka2) 26. Qc4 Qe6 27. Qd3?! { (-2.85 → -4.01) Inaccuracy. Nhf5 was best. } (27. Nhf5 Qf6 28. g4 b5 29. Qb4 Nb6 30. b3 h5 31. h3 a5 32. Qa3 bxa4 33. bxa4 Nd5) 27... Qb3?! { (-4.01 → -3.11) Inaccuracy. Nc5 was best. } (27... Nc5 28. Qc4 Qxc4 29. Nxc4 Nxa4 30. Rxe8 Rxe8 31. Nf5 b5 32. Nce3 Nb6 33. Kb1 Bc8 34. Kc1) 28. Qxh7?? { (-3.11 → -6.79) Blunder. Qc2 was best. } (28. Qc2 Qxc2 29. Nxc2 Nf6 30. f3 b5 31. axb5 cxb5 32. Kb1 Nd5 33. Ng2 Rxe1 34. Rxe1 Ka7) 28... Qxa4+?! { (-6.79 → -4.39) Inaccuracy. Rxe3 was best. } (28... Rxe3 29. fxe3 c5 30. d5 Ne5 31. Qb1 Bxd5 32. Rxd5 Rxd5 33. Qa2 Rd1+ 34. Rxd1 Qxd1+ 35. Qb1) 29. Kb1 Qb3?! { (-4.41 → -3.20) Inaccuracy. c5 was best. } (29... c5 30. d5 b5 31. Qc2 Qa5 32. Nf3 Nf6 33. c4 bxc4 34. Qxc4 Rd6 35. Nd2 Bxd5 36. Nxd5) 30. c4?! { (-3.20 → -4.40) Inaccuracy. Qc2 was best. } (30. Qc2 Qb5) 30... Nf6 31. Qxf7?? { (-3.90 → -9.75) Blunder. Qc2 was best. } (31. Qc2 Qb4) 31... Ne4 32. Ka1 Rf8 33. Qh5 Rxf2 34. Re2 Rdf8 35. Rde1?! { (-12.59 → Mate in 8) Checkmate is now unavoidable. Nc2 was best. } (35. Nc2 Nd6) 35... Rxe2? { (Mate in 8 → -7.64) Lost forced checkmate sequence. Nd2 was best. } (35... Nd2 36. Nc2 Qxc2 37. Re3 Nb3+ 38. Rxb3 Qxb3 39. Qe8+ Rxe8 40. Rxe8+ Ka7 41. Re2 Rf1+ 42. Re1) 36. Rxe2 Qd3 37. Nhf5 Ka7?! { (-9.59 → -5.57) Inaccuracy. Nd2 was best. } (37... Nd2 38. Rxd2 Qxd2 39. Ka2 c5 40. d5 Be5 41. Nd1 Ka7 42. Qf3 Qb4 43. g4 Qxc4+ 44. Qb3) 38. Ka2?! { (-5.57 → -9.48) Inaccuracy. Re1 was best. } (38. Re1 Qd2 39. Rd1 Qb4 40. Qe2 Qa5+ 41. Kb1 Rxf5 42. Nxf5 Qxf5 43. Qc2 c5 44. d5 b5) 38... Bc8 39. Qh7 Kb8 40. Re1 Bxf5 41. Nxf5?! { (-12.17 → Mate in 9) Checkmate is now unavoidable. Qg7 was best. } (41. Qg7 Rf6) 41... Nd6? { (Mate in 9 → -7.39) Lost forced checkmate sequence. Qxc4+ was best. } (41... Qxc4+ 42. Ka1 Nd2 43. Qe7 Rxf5 44. d5 Rf1 45. Rxf1 Qxf1+ 46. Qe1 Qxe1+ 47. Ka2 Qb1+ 48. Ka3) 42. Re7?! { (-7.39 → -18.32) Inaccuracy. g4 was best. } (42. g4 Qxc4+)",
            'option_one' => 'Bd8',
            'option_two' => 'Qc4+',
            'option_three' => 'Nxf5',
            'answer' => 'Bd8',
            'description' => "From https://lichess.org/es/training/Y9N7q"
        ]);

        Tactic::create([
            'pgn' => "1. e4 c5 2. d4 cxd4 3. c3 Nf6 4. e5 Nd5 { B22 Sicilian Defense: Alapin Variation, Smith-Morra Declined } 5. Bc4 e6?! { (-0.26 → 0.32) Inaccuracy. Qc7 was best. } (5... Qc7 6. Bb3 Qxe5+ 7. Ne2 e6 8. cxd4 Qh5 9. O-O Bb4 10. Nd2) 6. cxd4 Nc6 7. Nf3 d6 8. O-O Be7 9. Bd2 O-O 10. Nc3 Nxc3 11. Bxc3 dxe5 12. dxe5 b6 13. Nd2?! { (0.42 → -0.29) Inaccuracy. Bd3 was best. } (13. Bd3) 13... Bb7 14. Ne4?! { (-0.28 → -1.00) Inaccuracy. Qe2 was best. } (14. Qe2 Qc7 15. Rac1 Rfd8 16. Bd3 Rd7 17. Nf3 a5 18. a3 h6 19. Bc2 Rad8 20. Qe4 g6) 14... Qxd1 15. Raxd1 Rad8? { (-0.91 → 0.51) Mistake. Nxe5 was best. } (15... Nxe5 16. Bxe5 Bxe4 17. Rd7 Bf6 18. Bxf6 gxf6 19. f3 Bc6 20. Rc7 Rfc8 21. Rxc8+ Rxc8 22. Ba6) 16. Nd6 Bxd6 17. Rxd6 Rxd6 18. exd6 Rd8 19. Rd1 Ne7",
            'option_one' => 'h4',
            'option_two' => 'Be5',
            'option_three' => 'dxe7',
            'answer' => 'dxe7',
            'description' => "From https://lichess.org/es/training/zTcWQ"
        ]);

        Tactic::create([
            'pgn' => "1. e4 e5 2. Nf3 Nf6 3. Nc3 d5 4. exd5 Nxd5 5. Bc4 Nxc3 6. bxc3 Bg4 7. Bxf7+ Kxf7 8. Nxe5+ Kg8 9. Qxg4",
            'option_one' => 'Qd5',
            'option_two' => 'h5',
            'option_three' => 'h6',
            'answer' => 'h5',
            'description' => "From game 3 of Aman's https://www.youtube.com/watch?v=qK0Ds5vLAjE&list=PL8N8j2e7RpPnpqbISqi1SJ9_wrnNU3rEm&index=20 ."
        ]);

        Tactic::create([
            'pgn' => "1. e4 e6 2. d4 d5 3. exd5 { C01 French Defense: Exchange Variation } exd5 4. Nf3 Bg4 5. Be2 Bb4+ 6. c3 Bd6 7. O-O Ne7 8. Bg5 f6 9. Bh4 O-O 10. Bg3 Bxg3 11. fxg3 c5?! { (0.33 → 1.16) Inaccuracy. Nf5 was best. } (11... Nf5 12. Re1) 12. h3?! { (1.16 → 0.09) Inaccuracy. dxc5 was best. } (12. dxc5 Re8 13. Nd4 Bxe2 14. Qxe2 Nbc6 15. Na3 Nxd4 16. cxd4 Nc6 17. Qd2 Re4 18. Nc2 Qd7) 12... Bh5?! { (0.09 → 0.78) Inaccuracy. Bxf3 was best. } (12... Bxf3 13. Bxf3 Qb6 14. dxc5 Qxb2 15. Qb3 Qxb3 16. axb3 Nd7 17. b4 a5 18. Na3 axb4 19. cxb4) 13. g4 Bg6 14. Nh4?! { (0.93 → 0.03) Inaccuracy. dxc5 was best. } (14. dxc5 Nd7 15. b4 b6 16. c6 Ne5 17. b5 a6 18. Nxe5 fxe5 19. Rxf8+ Qxf8 20. bxa6 Qf6) 14... Bf7 15. Nf5?! { (0.05 → -0.72) Inaccuracy. dxc5 was best. } (15. dxc5 b6 16. c6 Nbxc6 17. Nf3 d4 18. Re1 dxc3 19. Nxc3 Ng6 20. Qxd8 Raxd8 21. Rad1 Rfe8) 15... Nxf5 16. gxf5 Qe7?! { (-0.69 → -0.09) Inaccuracy. Nc6 was best. } (16... Nc6 17. dxc5) 17. Bf3 Qe3+ 18. Kh1 Re8? { (-0.10 → 1.16) Mistake. cxd4 was best. } (18... cxd4 19. Qxd4 Qe5 20. Na3 Nc6 21. Qd3 Rad8 22. Rad1 Qc7 23. Nb5 Qb6 24. Nd4 Nxd4 25. cxd4) 19. Nd2? { (1.16 → -0.42) Mistake. Qb3 was best. } (19. Qb3) 19... cxd4 20. Re1?! { (-0.37 → -1.43) Inaccuracy. Qb3 was best. } (20. Qb3 Nc6 21. Bxd5 Qe7 22. Nf3 dxc3 23. bxc3 Bxd5 24. Qxd5+ Qf7 25. Rfd1 Re7 26. Kg1 Rc8) 20... Qxe1+ 21. Qxe1 Rxe1+ 22. Rxe1 dxc3 23. bxc3 Nc6 24. Nb3 b6 25. Nd4 Nxd4? { (-1.54 → -0.21) Mistake. Ne5 was best. } (25... Ne5 26. Be2 Rc8 27. Rc1 Be8 28. Kg1 Bd7 29. Kf2 Rc5 30. a3 Kf7 31. g4 g6 32. Ke3) 26. cxd4 Kf8 27. Rc1 b5 28. Rc7",
            'option_one' => 'Rd8',
            'option_two' => 'b4',
            'option_three' => 'Be8',
            'answer' => 'b4',
            'description' => "From https://lichess.org/es/training/tLQlY"
        ]);

        Tactic::create([
            'pgn' => "1. Nf3 d5 2. e4?! { (0.22 → -0.78) Inaccuracy. b3 was best. } { A06 Zukertort Opening: Tennison Gambit } (2. b3 Nf6 3. Bb2 e6 4. e3 Nbd7 5. c4 Bd6 6. d4 O-O) 2... dxe4 3. Ng5 Bf5 4. Nc3 Nf6 5. Qe2 Qd4?? { (-1.23 → 3.39) Blunder. Nc6 was best. } (5... Nc6 6. Qc4 e6 7. Ngxe4 Nxe4 8. Nxe4 Nd4 9. Qa4+ c6 10. c3) 6. Qb5+ Nbd7 7. Qxf5 h6?! { (3.31 → 4.74) Inaccuracy. e6 was best. } (7... e6 8. Qf4 e5 9. Qe3 Nc5 10. b4 h6 11. Nxf7 Kxf7 12. bxc5) 8. Ngxe4 Nxe4 9. Qxe4 Qb6 10. d4 Nf6 11. Qd3 O-O-O 12. Be3 e5 13. Qf5+?! { (5.26 → 3.53) Inaccuracy. O-O-O was best. } (13. O-O-O Ng4 14. Qf5+ Qe6 15. Qxe6+ fxe6 16. Bc4 Nxe3 17. fxe3 exd4 18. exd4 g6 19. Ne4 Bg7) 13... Kb8 14. dxe5??",
            'option_one' => 'O-O-O',
            'option_two' => 'dxe5',
            'option_three' => 'Nb5',
            'answer' => 'dxe5',
            'description' => "From https://lichess.org/es/training/kPvLy"
        ]);

        Tactic::create([
            'pgn' => "1. Nf3 d5 2. g3 { A07 King's Indian Attack } Nc6 3. Bg2 e5 4. d3 Nf6 5. O-O Qd6 6. Re1 h5 7. Bg5 Be7 8. Nbd2 Bg4 9. Bxf6?! { (0.71 → 0.03) Inaccuracy. c4 was best. } (9. c4 Rd8 10. Qb3 Bc8 11. a3 O-O 12. Rac1 Qd7 13. cxd5 Nxd5 14. h3 Nf6 15. h4 Qe6) 9... Bxf6 10. e4? { (0.41 → -0.74) Mistake. c4 was best. } (10. c4 Be6 11. cxd5 Bxd5 12. h4 Qd7 13. Rc1 O-O 14. Ne4 Rad8 15. a3 Be7 16. Nc5 Bxc5) 10... O-O-O?? { (-0.74 → 1.01) Blunder. d4 was best. } (10... d4 11. h3 Be6 12. h4 Qd7 13. Nc4 O-O 14. c3 dxc3 15. bxc3 Rad8 16. Ne3 Qxd3 17. Nd5) 11. exd5 Nd4? { (0.76 → 2.02) Mistake. Qxd5 was best. } (11... Qxd5 12. h3) 12. h3 Bxf3 13. Nxf3 Qxd5?! { (1.88 → 3.12) Inaccuracy. Nxf3+ was best. } (13... Nxf3+ 14. Qxf3 h4 15. g4 Kb8 16. c4 Rhe8 17. Rab1 Qb6 18. b4 Bg5 19. a4 Qf6 20. Qxf6) 14. Nxe5 Qc5 15. Nxf7 Rhf8? { (3.03 → 5.41) Mistake. Qxc2 was best. } (15... Qxc2 16. Nxd8 Bxd8 17. Re4 Qxd1+ 18. Rxd1 Bf6 19. Rde1 c6 20. Re8+ Rxe8 21. Rxe8+ Kd7 22. Rf8) 16. Nxd8 Nxc2?! { (4.91 → 8.50) Inaccuracy. Bxd8 was best. } (16... Bxd8) 17. Ne6? { (8.50 → 4.79) Mistake. Bxb7+ was best. } (17. Bxb7+ Kxd8 18. Rc1 Bd4 19. Rxc2 Bxf2+ 20. Kg2 Qb4 21. Re4 Qxb7 22. Rxf2 Rxf2+ 23. Kxf2 c6) 17... Qxf2+",
            'option_one' => 'Kxf2',
            'option_two' => 'Kh2',
            'option_three' => 'Kh1',
            'answer' => 'Kxf2',
            'description' => "From https://lichess.org/es/training/H9Grk"
        ]);

        Tactic::create([
            'pgn' => "1. e4 e5 2. Bc4 Nf6 3. Nc3 Bc5 4. d3 Nc6 5. Nf3 { C50 Italian Game: Giuoco Pianissimo, Italian Four Knights Variation } h6 6. O-O d6 7. a3 Be6 8. Bb5?! { (0.48 → -0.13) Inaccuracy. Bxe6 was best. } (8. Bxe6 fxe6 9. Na4 Bb6 10. c3 O-O 11. b4 Ne7 12. Re1 Ng6) 8... O-O 9. Na4 a6?? { (-0.46 → 2.56) Blunder. Nd4 was best. } (9... Nd4) 10. Nxc5?? { (2.56 → 0.25) Blunder. Bxc6 was best. } (10. Bxc6) 10... axb5 11. Nxe6 fxe6 12. h3 b4 13. Be3 bxa3 14. bxa3 d5 15. Nd2?? { (-0.03 → -3.82) Blunder. exd5 was best. } (15. exd5) 15... d4 16. Bxh6 gxh6 17. Qf3 Qe7 18. Nc4 Kf7 19. Qg3 Rg8? { (-3.45 → -1.88) Mistake. Nd7 was best. } (19... Nd7 20. f4 Ke8 21. f5 exf5 22. Rxf5 Rxf5 23. exf5 Qg5 24. Qf3 Kd8 25. Rf1 Nf6 26. Re1) 20. Nxe5+ Nxe5 21. Qxe5 Rac8?! { (-2.07 → -1.09) Inaccuracy. Rg5 was best. } (21... Rg5 22. Qxd4) 22. Qxd4 c5 23. Qe3 Rg6 24. f4?? { (-0.78 → -3.56) Blunder. Kh1 was best. } (24. Kh1 Rcg8 25. g3 Qc7 26. a4 b6 27. Qe1 Ra8 28. Kh2 h5 29. e5 Nd5 30. Rg1 Kg7) 24... Rcg8 25. Rf2 Nh5?? { (-3.41 → 0.07) Blunder. Rg3 was best. } (25... Rg3 26. Qc1 Rxh3 27. Qb2 Rh5 28. Rf3 Ng4 29. g3 c4 30. Qb6 cxd3 31. cxd3 Rc8 32. f5) 26. f5? { (0.07 → -1.35) Mistake. g4 was best. } (26. g4) 26... Rg3?? { (-1.35 → 0.89) Blunder. exf5 was best. } (26... exf5 27. Rxf5+) 27. Qxh6 Qh4?? { (0.63 → 3.06) Blunder. Qg5 was best. } (27... Qg5) 28. Qxe6+ Kf8",
            'option_one' => 'f6',
            'option_two' => 'Kf1',
            'option_three' => 'Qh6+',
            'answer' => 'f6',
            'description' => "From https://lichess.org/es/training/G5uV0"
        ]);

        Tactic::create([
            'pgn' => "1. e4 c5 2. Nf3 d6 3. d4 cxd4 4. Nxd4 Nf6 5. Nc3 g6?! { (0.18 → 0.79) Inaccuracy. a6 was best. } { B70 Sicilian Defense: Dragon Variation } (5... a6 6. Bd3 e5 7. Nde2 Nc6 8. O-O Be6 9. h3 d5 10. exd5) 6. Nf3? { (0.79 → -0.36) Mistake. Be3 was best. } (6. Be3 Nc6 7. f3 Bg7 8. Qd2 O-O 9. O-O-O d5 10. exd5 Nxd5) 6... Bg7?! { (-0.36 → 0.36) Inaccuracy. Nbd7 was best. } (6... Nbd7 7. Bc4 Bg7 8. O-O O-O 9. Qe2 b6 10. Rd1 Bb7 11. Nd5) 7. Bd3?! { (0.36 → -0.25) Inaccuracy. e5 was best. } (7. e5 dxe5 8. Qxd8+ Kxd8 9. Nxe5 Be6 10. Be3 Nfd7 11. Nxd7 Bxc3+) 7... Nc6 8. O-O O-O 9. a3 Bg4 10. h3 Bxf3 11. Qxf3 Ne5 12. Qe2 Nxd3 13. cxd3 Nd7 14. Be3 Rc8 15. Rac1 a6 16. Nd5",
            'option_one' => 'Rb8',
            'option_two' => 'e6',
            'option_three' => 'Re8+',
            'answer' => 'e6',
            'description' => "From https://lichess.org/es/training/kfAt6"
        ]);

        Tactic::create([
            'pgn' => "1. d4 d5 2. Bf4 { D00 Queen's Pawn Game: Accelerated London System } Nc6 3. e3 Nf6 4. Nf3 Bg4 5. h3 Bh5 6. Nbd2 e6 7. Bb5 Ne4? { (0.17 → 1.48) Mistake. Bd6 was best. } (7... Bd6 8. g4 Bg6 9. Ne5 Bxe5 10. Bxe5 O-O 11. Bg3 Nb4 12. Ba4) 8. g4 Bg6 9. Ne5 a6 10. Bxc6+ bxc6 11. Nxc6 Qd7 12. Ne5 Bd6?? { (1.95 → 7.94) Blunder. Qa4 was best. } (12... Qa4 13. c3 Qxd1+ 14. Rxd1 Rb8 15. Nxe4 Bxe4 16. f3 f6 17. fxe4 fxe5 18. Bxe5 Rxb2 19. Rh2) 13. Nxd7 Bxf4 14. exf4 Kxd7 15. Nxe4 Bxe4 16. c3? { (8.01 → 4.45) Mistake. f3 was best. } (16. f3 Bg6) 16... Bxh1 17. f5 exf5 18. gxf5 Be4 19. Qg4 f6?! { (3.87 → 5.33) Inaccuracy. g6 was best. } (19... g6 20. fxg6+ f5 21. Qg5 hxg6 22. h4 f4 23. O-O-O Kc6 24. Re1 Kb7 25. Qe7 Rae8 26. Qb4+) 20. Kd2 Rhg8?! { (4.48 → 5.73) Inaccuracy. g6 was best. } (20... g6) 21. f3 Rae8 22. fxe4 Rxe4 23. Qf3 Rge8 24. Kd3 Rb8 25. b3 a5 26. Qh1 c6 27. Re1 Rf4 28. Rf1 Rh4 29. c4 Rb4 30. cxd5 Rbxd4+ 31. Kc3 Rxd5 32. Rf3?! { (7.06 → 5.21) Inaccuracy. Qg2 was best. } (32. Qg2 Kc8 33. Re1 Rhd4 34. Re8+ Kd7 35. Ra8 Rd3+ 36. Kc2 g6 37. fxg6 Rd2+ 38. Qxd2 Rxd2+) 32... Rc5+ 33. Kb2 Rd4 34. Rg3 Rd2+ 35. Ka3 Rcc2 36. Rxg7+ Kd6 37. Qa1 h5? { (7.26 → Mate in 12) Checkmate is now unavoidable. Kc5 was best. } (37... Kc5 38. Rxh7) 38. Qxf6+ Kc5 39. Qa1?! { (Mate in 10 → 10.75) Lost forced checkmate sequence. Qe5+ was best. } (39. Qe5+ Rd5 40. Qe3+ Rd4 41. f6 Re2 42. Qxe2 Rd6 43. Qe3+ Rd4 44. f7 Kb6 45. f8=Q Ka6) 39... Rh2?! { (10.75 → Mate in 5) Checkmate is now unavoidable. Rb2 was best. } (39... Rb2 40. f6) 40. Ra7? { (Mate in 5 → 9.40) Lost forced checkmate sequence. Qe5+ was best. } (40. Qe5+ Kb6 41. Qd4+ Rc5 42. Qd8+ Ka6 43. Qa8+ Kb5 44. Rb7#) 40... Kb6 41. Qg1+?? { (9.39 → 0.11) Blunder. Rd7 was best. } (41. Rd7) 41... Rcf2?? { (0.11 → 8.97) Blunder. Rhf2 was best. } (41... Rhf2 42. Qxf2+ Rxf2 43. Rf7 Rf3 44. Rf8 Rxh3 45. f6 Rf3 46. f7 Kb7 47. Ka4 Rf5 48. Rh8) 42. Rxa5?? { (8.97 → 0.00) Blunder. Rg7 was best. } (42. Rg7) 42... Kxa5 ",
            'option_three' => 'Qe1+',
            'option_two' => 'Qa1',
            'option_one' => 'b4+',
            'answer' => 'b4+',
            'description' => "From https://lichess.org/es/training/NL4fP"
        ]);

        Tactic::create([
            'pgn' => "1. e4 e5 2. c3?! { (0.12 → -0.46) Inaccuracy. Nf3 was best. } { C20 King's Pawn Game: MacLeod Attack } (2. Nf3 Nc6 3. Bb5 Nf6 4. O-O Nxe4 5. Re1 Nd6 6. Nxe5 Be7) 2... Nf6 3. Bd3? { (-0.12 → -1.70) Mistake. Nf3 was best. } (3. Nf3 Nxe4 4. d3 Nf6 5. Nxe5 Bd6 6. Ng4 O-O 7. Nxf6+ Qxf6) 3... d6? { (-1.70 → -0.22) Mistake. d5 was best. } (3... d5 4. Qe2 Bc5 5. Nf3 O-O 6. O-O Re8 7. Bc2 Nxe4 8. Nxe5) 4. Nf3 Nc6 5. Bc2 Bg4?! { (-0.44 → 0.64) Inaccuracy. d5 was best. } (5... d5 6. d3 dxe4 7. dxe4 Qxd1+ 8. Kxd1 a5 9. Ke2 Nd7 10. Be3) 6. h3 Bh5 7. d3 a6 8. Bg5?! { (0.70 → -0.03) Inaccuracy. Nbd2 was best. } (8. Nbd2 d5 9. Qe2 Bd6 10. Nf1 Bg6 11. Nh4 d4 12. Ng3 O-O 13. Nhf5 Bxf5 14. Nxf5 Ne7) 8... Be7 9. Bh4 Bxf3?! { (-0.25 → 0.51) Inaccuracy. Nd7 was best. } (9... Nd7) 10. Qxf3 h6 11. Nd2 Qd7 12. Nb3 Nh7 13. Bxe7 Qxe7 14. O-O Ng5 15. Qe2?! { (0.77 → 0.20) Inaccuracy. Qe3 was best. } (15. Qe3 Ne6) 15... O-O 16. f4 exf4 17. Rxf4 f5",
            'option_three' => 'Nd2',
            'option_two' => 'h4',
            'option_one' => 'Qe3',
            'answer' => 'Nd2',
            'description' => "From https://lichess.org/es/training/pCwpL"
        ]);

        Tactic::create([
            'pgn' => "1. e4 e5 2. Bc4 Nf6 3. Nc3 Nxe4 { C27 Vienna Game: Frankenstein-Dracula Variation } 4. Bxf7+?! { (0.17 → -0.51) Inaccuracy. Qh5 was best. } (4. Qh5 Nd6 5. Qxe5+ Qe7 6. Qxe7+ Bxe7 7. Be2 Nc6 8. Nf3 Nf5) 4... Kxf7 5. Nxe4 d5 6. Qf3+ Ke6? { (-0.81 → 0.53) Mistake. Kg8 was best. } (6... Kg8 7. d4 exd4 8. Ne2 Nc6 9. O-O Qd7 10. N4g3 Qf7 11. Qxf7+) 7. Ng3",
            'option_three' => 'Nc6',
            'option_two' => 'Qf6',
            'option_one' => 'Bc5',
            'answer' => 'Qf6',
            'description' => "From https://lichess.org/es/training/5T6OL"
        ]);
    }
}
