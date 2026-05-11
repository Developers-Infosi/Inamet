<?php

namespace Database\Factories;

use App\Models\About;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = About::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => "",
            'body' => "

                        <p style='text-align:justify;'>

                        <b>O Instituto FIGE (IFIGE)</b> foi criado em 2012, em Luanda (Angola) na sequência da 4ª Assembleia Geral da FIGE. <br/> <br/>
                        
                        <b>O Fórum de Inspeções Gerais do Estado (FIGE)</b> <br/>
                        
                        </p>
                        
                        <p style='text-align:justify;'>
                            Criado em 2006 pelas Inspecções Gerais do Estado de cinco países africanos (Djibouti, Burkina Faso, Chade, Senegal, 
                            Mauritânia), o Fórum das Inspecções Gerais do Estado de África e Instituições Similares (FIGE) é uma associação sob 
                            uma organização regional africana que reúne , até à data, vinte e quatro (24) Estados, representados pelas suas 
                            Instituições Superiores de Controlo, bem como por parceiros técnicos como: o Organismo Europeu de Luta Antifraude 
                            (OLAF), a Direção-Geral de Desenvolvimento e Cooperação da Comissão Europeia (AIDCO) , Fundação Africana para o Reforço 
                            de Capacidades (ACBF)…).

                            <br/><br/>

                            Os principais objetivos da FIGE são: <br/>

                            <ul>
                                <li>
                                Facilitar a troca de experiências sobre sistemas e métodos de verificação, controlo e funcionamento entre Inspeções 
                                Gerais do Estado, nomeadamente através de reuniões e consultas entre elas ou com outros organismos internacionais;
                                </li>

                                <li>
                                    Promover e harmonizar os princípios da boa governação e da transparência;
                                </li>

                                <li>

                                Estabelecer programas de formação para profissionais das Inspecções Gerais do Estado, quadros e estudantes da administração pública,
                                 de forma a oferecer-lhes ferramentas de análise inovadoras e eficientes para uma gestão eficaz do sector público, ou a outras estruturas
                                  de controlo.
                                
                                </li>

                              
                            </ul>

                            <br/>


                            <p style='text-align:justify;'>
                                O Fórum está estruturado em torno de: <br/>

                                <ul>
                                    <li>Assembleia Geral que se reúne a cada dois anos;</li>
                                    <li>Comitê de direção;</li>
                                    <li>Secretaria Executiva.</li>
                                </ul>
                            </p>


                            <p style='text-align:justify;'>

                         <b>Missões e organização</b> <br/>  

                                 <ul>
                                    <li>Missões <br/>

                                    <p>A missão do Instituto FIGE é a investigação e formação nas profissões de Controlo, verificação,
                                     auditoria, investigação, investigação e avaliação.Como tal, ele é responsável por:</p>
                                    
                                        <ul>
                                            <li>Formação contínua e profissionalização de executivos de instituições de controle dos estados
                                             membros da FIGE e instituições similares;</li>

                                             <li>O curso de diploma: <br/>
                                                <ul>
                                                <li>Diploma Universitário (DU) em AUDITORIA, CONTROLE DE ORGANIZAÇÕES PÚBLICAS (ACOP).
                                                 Esta formação pode constituir uma porta de entrada para o Master 2 em CONTROLO DE AUDITORIA
                                                  E GESTÃO PÚBLICA (ACMP).</li>

                                                 <li>Mestre em Administração Pública (MPA).</li> <br/>
                                                </ul>
                                             </li>

                                             <li>Investigação em técnicas de controlo e normalização para administrações públicas;</li>
                                             <li>Assistência técnica aos estados membros da FIGE e estruturas similares, através de conhecimentos
                                              especializados e aconselhamento.</li>
                                        </ul>
                                    </li>

                                    <br/>

                                    <li>Organização <br/>

                                    <b>Supervisão do Instituto</b> <br/>

                                    <p>A fiscalização do Instituto é exercida pela Assembleia Geral da FIGE. Entre as sessões da Assembleia Geral,
                                     a supervisão é delegada ao Comité Diretor da FIGE.</p>

                                     <li>Administração do Instituto <br/>

                                     <ul>
                                        <li>Um Conselho de Administração</li>
                                        <li>Uma Direção Geral composta por: <br/>

                                            <ul>
                                            <li>Uma Secretaria Geral</li>
                                            <li>Um Comitê Científico</li>
                                            <li>Um conselho disciplinar.</li>
                                            </ul>
                                        
                                        </li>
                                     </ul>
                                     
                                     </li>
                                    
                                    
                                    </li>
                                   
                                </ul>


                                <b>Objetivo principal</b> <br/>

                                <p>O programa de formação IFIGE visa ministrar formação em técnicas de otimização de missões de auditoria,
                                 verificação e controlo das administrações públicas, de forma a dotar o setor público e parapúblico de pessoal
                                 competente e capaz de dar um contributo sustentado à profissão. <br/>
                                 
                                 Os módulos assim propostos foram concebidos para actualizar os actores de controlo do Estado,
                                  reforçar competências e assim permitir a profissionalização da profissão de inspecção, auditoria,
                                   verificação e sistemas de informação.</p>

                                    <b>Objetivos específicos</b> <br/>
                                    <ul>
                                        <li>A diversidade de perfis de participantes;</li>
                                        <li>A intervenção de profissionais experientes no controlo público, parapúblico e privado;</li>
                                        <li>Métodos e técnicas objecto de aplicação sistemática e progressiva sob a forma de exercícios e estudos de casos;</li>
                                        <li>Domínio, através da prática, de aprofundar a reflexão sobre questões relacionadas com o exercício da profissão,
                                         favorecendo a interatividade e a partilha de experiências.</li>
                                    </ul>

                            
                            </p>
                        
                        </p>


            ",
        ];
    }
}
